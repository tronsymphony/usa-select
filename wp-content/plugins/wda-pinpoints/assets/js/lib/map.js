const $map = function() {
    "use strict";
    
    var map = null,
        properties = {},
        markers = [];
    
    /**
     * 
     */
    
    function getBounds( map ) {
        let bounds = map.getBounds(),
            ne = bounds.getNorthEast(),
            sw = bounds.getSouthWest();
        
        return {
            ne: {
                lat: ne.lat(),
                lng: ne.lng()
            },
            sw: {
                lat: sw.lat(),
                lng: sw.lng()
            }
        };
    }
    
    function listenBounds( map ) {
        map.addListener( "bounds_changed", () => {
            properties.bounds = getBounds( map );
        });
    }
    
    /**
     * 
     */
    
    function getCenter( map ) {
        let center = map.getCenter();
        
        return {
            lat: center.lat(),
            lng: center.lng()
        };
    }
    
    function listenCenter( map ) {
        map.addListener( "center_changed", () => {
            properties.center = getCenter( map );
        });
    }
    
    /**
     * 
     */
    
    function getZoom( map ) {
        return map.getZoom();
    }
    
    function listenZoom( map ) {
        map.addListener( "zoom_changed", () => {
            properties.zoom = getZoom( map );
        });
    }
    
    /**
     * 
     */
    
    function setMap( dom_map, lat, lng, zoom ) {
        properties.dom_map = dom_map;
        properties.zoom = zoom;
        properties.center = {
            lat: lat,
            lng: lng
        };
        
        return new google.maps.Map( document.querySelector( dom_map ), {
            mapId: "PROPERTIES_MAP",
            center: {
                lat: lat,
                lng: lng
            },
            disableDefaultUI: false,
            minZoom: 2,
            maxZoom: 20,
            zoom: zoom
        });
    }
    
    /**
     * @link https://developers.google.com/maps/documentation/javascript/advanced-markers/html-markers
     * @link https://developers.google.com/maps/documentation/javascript/advanced-markers/collision-behavior
     */
    
    function setMarker( map, lat, lng, content ) {
        var marker = new google.maps.marker.AdvancedMarkerView({
            map,
            content,
            position: {
                lat: lat,
                lng: lng
            }
        });
        
        var element = marker.element;
        
        [ "focus", "pointerenter" ].forEach( function( e ) {
            element.addEventListener( e, () => {
                highlight( marker );
            });
        });
        
        [ "blur", "pointerleave" ].forEach( function( e ) {
            element.addEventListener( e, () => {
                unhighlight( marker );
            });
        });
        
        markers.push( marker );
        return marker;
    }
    
    /**
     * 
     * @param {*} marker 
     */
    
    function highlight( marker ) {
        marker.content.classList.add( "is-highlighted" );
        marker.element.style.zIndex = 1;
    }
    
    /**
     * 
     * @param {*} marker 
     */
    
    function unhighlight( marker ) {
        marker.content.classList.remove( "is-highlighted" );
        marker.element.style.zIndex = "";
    }
    
    /**
     * 
     */
    
    $map.run = function( dom_map, lat = 25.761681, lng = -80.191788, zoom = 12 ) {
        map = setMap( dom_map, lat, lng, zoom );
        
        listenBounds( map );
        listenZoom( map );
        listenCenter( map );
        
        google.maps.event.addListenerOnce( map, "idle", () => {
            properties.bounds = getBounds( map );
            properties.zoom = getZoom( map );
            properties.center = getCenter( map );
        });
        
        properties._ = Object.assign( {}, properties );
    };
    
    /**
     * 
     */
    
    $map.getMapProperties = function() {
        return properties;
    };
    
    /**
     * 
     * @param {*} latitude 
     * @param {*} longitude 
     */
    
    $map.setMarker = function( latitude, longitude, content ) {
        setMarker( map, latitude, longitude, content );
    };
    
    /**
     * 
     */
    
    $map.setAutoBounds = function() {
        var bounds = new google.maps.LatLngBounds();
        
        for ( var i in markers ) {
            bounds.extend( markers[ i ].position );
        }
        
        map.fitBounds( bounds );
    };
    
    /**
     * 
     */
    
    $map.setCenter = function( lat, lng ) {
        map.setCenter( new google.maps.LatLng( parseFloat( lat ), parseFloat( lng ) ) );
        map.setZoom( properties._.zoom );
    };
    
    /**
     * 
     */
    
    $map.setInitialProperties = function() {
        map = setMap( properties._.dom_map, properties._.center.lat, properties._.center.lng, properties._.zoom );
        this.clearMarkers();
    };
    
    /**
     * 
     */
    
    $map.clearMarkers = function() {
        for ( var i in markers ) {
            markers[ i ].map = null;
        }
        
        markers = [];
    };
    
    return $map;
};