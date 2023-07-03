if ( !String.prototype.format ) {
    String.prototype.format = function() {
        var args = arguments;
        return this.replace( /{(\d+)}/g, function( match, number ) { 
            return typeof args[number] != "undefined" ? args[ number ] : match;
        });
    };
}

var $frontend = function() {
    "use strict";
    
    var dom_pinpoints_search = "div[data-pinpoints=\"search\"]",
        dom_results = [ dom_pinpoints_search, "div.results-wrap", "div.results" ].join( " " ),
        dom_categories = [ dom_pinpoints_search, "div.categories-wrap", "ul.categories" ].join( " " ),
        dom_input = [ dom_pinpoints_search, "div.search-wrap", "input" ].join( " " ),
        dom_user_geolocator = [ dom_pinpoints_search, "div.switch-wrap", "input" ].join( " " ),
        options = {
            query: {},
            results_text: "View {0} results"
        };
    
    /**
     * 
     * @param {*} locations 
     */
    
    function setLocationsHtml( locations ) {
        var html = [
            "<h3>" + options.results_text.format( locations.length ) + "</h3>"
        ];
        
        for ( var i in locations ) {
            var location = locations[ i ].item || locations[ i ],
                phone_number = "",
                office_hours = "";
            
            if ( typeof location.phone_number !== "undefined" ) {
                phone_number = `<li class="phone-number"><a href="tel:${location.phone_number}">${location.phone_number}</a></li>`;
            }
            
            if ( typeof location.office_hours !== "undefined" ) {
                office_hours = `<li class="office-hours">${location.office_hours}</li>`;
            }
            
            html.push( `<div class="location">
                <h4 class="name">
                    ${location.name}
                </h4>
                <p class="address">
                    ${location.address}
                </p>
                <ul class="details">
                    ${phone_number}
                    ${office_hours}
                </ul>
                <p class="directions">
                    <a class="button" target="_blank" href="https://www.google.com/maps/dir//${location.coordinates[ 0 ]},${location.coordinates[ 1 ]}/@${location.coordinates[ 0 ]},${location.coordinates[ 1 ]},12z/data=!3m1!4b1">
                        <img src="${$pinpoints_globals.plugins_url}/assets/img/turn-right.svg">
                        ${options.directions_text}
                    </a>
                </p>
            </div>` );
        }
        
        jQuery( dom_results ).html(
            html.join( "" )
        );
    }
    
    /**
     * 
     * @param {*} data 
     * @returns 
     */
    
    function getMarkerHtml( data ) {
        var content = document.createElement( "div" ),
            categories = ( function() {
                var html = `<div class="categories">`;
                
                data.categories.forEach( function( category ) {
                    html += `<span>${category.name}</span>`;
                });
                
                html += "</div>";
                return html;
            })();
        
        content.innerHTML = `<div class="marker">
            <div class="pin" style="background-image: url( '${$pinpoints_globals.plugins_url}/assets/img/pin.png' );"></div>
            <div class="content">
                <h6>${data.name}</h6>
                ${( typeof data.address !== "undefined" ) ? `<p>${data.address}</p>` : ``}
                ${( typeof data.phone_number !== "undefined" ) ? `<p><a href="tel:${data.phone_number}">${data.phone_number}</a></p>` : ``}
                ${( data.categories.length > 0 ) ? categories : ``}
            </div>
        </div>`;
        
        return content;
    }
    
    /**
     * 
     * @param {*} locations 
     */
    
    function setLocationsPinpoints( locations ) {
        $map.clearMarkers();
        
        for ( var i in locations ) {
            var location = locations[ i ].item || locations[ i ];
            
            if ( typeof $map === "function" ) {
                $map.setMarker(
                    location.coordinates[ 0 ],
                    location.coordinates[ 1 ],
                    getMarkerHtml( location )
                );
            }
        }
        
        $map.setAutoBounds();
    }
    
    /**
     * 
     * @param {*} query_string 
     * @param {*} type 
     */
    
    function setSearch( query_string, type ) {
        if ( "input" === type ) {
            options.query.input = query_string;
        }
        
        if ( "category" === type ) {
            options.query.categories = query_string.split( "|" ).map(
                function( e ) {
                    return parseInt( e );
                }
            ).filter( Boolean );
        }
        
        getSearch();
    }
    
    function unwrapFuseResults( results ) {
        return results.map( function( r ) {
            return r.item;
        });
    }
    
    /**
     * 
     * @param {*} query
     */
    
    function getSearch() {
        var results = window[ "pinpoints_locations" ],
            fuse = new Fuse( window[ "pinpoints_locations" ], {
                threshold: 0.15,
                shouldSort: true,
                includeScore: false,
                ignoreLocation: true,
                useExtendedSearch: true,
                keys: [
                    "name",
                    "address"
                ]
            });
        
        if ( typeof options.query.input !== "undefined" && options.query.input.length > 0 ) {
            results = unwrapFuseResults(
                fuse.search( options.query.input )
            );
        }
        
        results = results.filter(
            function( result ) {
                return result.categories.filter(
                    function( e ) {
                        return options.query.categories.indexOf( e.id ) !== -1;
                    }
                ).length > 0;
            }
        );
        
        setLocationsHtml( results );
        setLocationsPinpoints( results );
        
        if ( results.length === 0 ) {
            $map.setInitialProperties();
        }
    }
    
    /**
     * 
     */
    
    function getCheckedCategories() {
        var dom_checkboxes = [ dom_categories, "input" ].join( " " ),
            checked = [];
        
        jQuery( dom_checkboxes ).each( function() {
            if ( jQuery( this ).is( ":checked" ) === true ) {
                checked.push( jQuery( this ).val() );
            }
        });
        
        return checked;
    }
    
    /**
     * 
     */
    
    function onCategoryChange() {
        var dom_checkboxes = [ dom_categories, "input" ].join( " " );
        
        setSearch(
            getCheckedCategories().join( "|" ),
            "category"
        );
        
        jQuery( document ).off( "change", dom_checkboxes ).on( "change", dom_checkboxes, function( e ) {
            e.preventDefault();
            setSearch(
                getCheckedCategories().join( "|" ),
                "category"
            );
        });
    }
    
    /**
     * 
     */
    
    function onInputChange() {
        jQuery( document ).off( "blur keyup", dom_input ).on( "blur keyup", dom_input, function( e ) {
            var element = jQuery( this );
            
            if ( e.key === "Escape" ) {
                element.val( "" );
            }
            
            setSearch(
                element.val(),
                "input"
            );
            
            element[ ( element.val() !== "" ) ? "addClass" : "removeClass" ]( "has-text" );
        });
    }
    
    /**
     * 
     */
    
    function onSwitchChange() {
        jQuery( document ).off( "change", dom_user_geolocator ).on( "change", dom_user_geolocator, function( e ) {
            var element = jQuery( this ),
                wrap = element.parent().parent();
            
            if ( element.is( ":checked" ) === true ) {
                if ( !navigator.geolocation ) {
                    alert( "Geolocation is not supported by your browser." );
                }
                else {
                    wrap.addClass( "is-loading" );
                    navigator.geolocation.getCurrentPosition(
                        function( position ) {
                            wrap.removeClass( "is-loading" );
                            element.prop( "checked", false );
                            
                            $map.setCenter(
                                position.coords.latitude,
                                position.coords.longitude
                            );
                        },
                        function() {
                            wrap.removeClass( "is-loading" );
                            element.prop( "checked", false );
                            
                            alert( "Unable to retrieve your location." );
                        }
                    );
                }
            }
        });
    }
    
    /**
     * 
     */
    
    $frontend.run = function( o ) {
        options = Object.assign( {}, options, o );
        
        onCategoryChange();
        onInputChange();
        onSwitchChange();
        
        setLocationsHtml( window[ "pinpoints_locations" ] );
    };
    
    return $frontend;
};