<?php declare( strict_types = 1 );
    
    namespace WDAPinpoints\Core;
    
    use function \WDAPinpoints\Functions\{
        get_root
    };
    
    class Shortcodes {
        
        /** @var \WDAPinpoints\Core\Wordpress\Utils */
        private $wordpress_utils = null;
        
        /** @var array */
        const SHORTCODES = [
            "pinpoints_map" => "getMap",
            "pinpoints_search" => "getSearch",
            "pinpoints_wrap" => "getWrap"
        ];
        
        /**
         * 
         */
        
        public function __construct() {
            $this->wordpress_utils = new \WDAPinpoints\Core\Wordpress\Utils();
            
            foreach ( $this->getShortcodes() as $name => $method ) {
                add_shortcode( $name, array( $this, $method ) );
            }
        }
        
        /**
         * 
         */
        
        public function getShortcodes() : array {
            return self::SHORTCODES;
        }
        
        /**
         * 
         * @param array|string $attributes 
         * @param string $content 
         * @return string
         */
        
        public function getWrap( $attributes, string $content = "" ) : string {
            if ( gettype( $attributes ) === "array" ) {
                $attributes = ( object ) $attributes;
            }
            
            ob_start();
            
            ?><div data-pinpoints="wrap">
                <?php echo do_shortcode( $content ); ?>
            </div><?php
            
            $html = ob_get_contents();
            ob_end_clean();
            
            return $html;
        }
        
        /**
         * 
         * @param array|string $attributes 
         * @param string $content 
         * @return string
         */
        
        public function getSearch( $attributes, string $content = "" ) : string {
            if ( gettype( $attributes ) === "array" ) {
                $attributes = ( object ) $attributes;
            }
            $categories = $this->wordpress_utils->getCategories();
            
            ob_start();
            
            ?><div data-pinpoints="search">
                <div class="filters-wrap">
                    <?php if ( isset( $attributes->title ) === true ) : ?>
                        <h1><?php echo $attributes->title; ?></h1>
                    <?php endif; ?>
                    
                    <?php if ( trim( $content ) !== "" ) : ?>
                        <p><?php echo $content; ?></p>
                    <?php endif; ?>
                    
                    <div class="search-wrap">
                        <div class="search">
                            <input type="text" name="search" placeholder="<?php echo $attributes->search_text; ?>">
                            <span></span>
                        </div>
                    </div>
                    
                    <div class="categories-wrap">
                        <ul class="categories">
                            <?php foreach ( $categories as $category ) :
                                $category_id = "{$category->slug}-{$category->term_id}"; ?>
                                
                                <li class="category">
                                    <div class="checkbox">
                                        <input type="checkbox" name="categories[]" id="<?php echo $category_id; ?>" value="<?php echo $category->term_id; ?>" checked>
                                        <span></span>
                                    </div>
                                    
                                    <label for="<?php echo $category_id; ?>">
                                        <?php echo $category->name; ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="switch-wrap">
                        <div class="switch">
                            <input type="checkbox" name="user-geolocator" id="user-geolocator">
                            <span></span>
                        </div>
                        
                        <label for="user-geolocator">
                            <?php echo $attributes->user_geolocation_text; ?>
                        </label>
                    </div>
                </div>
                
                <div class="results-wrap">
                    <div class="results">
                        <!-- Dynamic loaded results -->
                    </div>
                </div>
                
                <script>
                    window[ "pinpoints_locations" ] = <?php
                        $locations = str_replace( "/", DIRECTORY_SEPARATOR, get_root() . "/cache/locations.json" );
                        
                        if ( file_exists( $locations ) === false || filemtime( $locations ) < time() - 3600 * 1 ) {
                            $results = json_encode( $this->wordpress_utils->getLocations() );
                            file_put_contents( $locations, $results, LOCK_EX );
                        }
                        
                        echo file_get_contents( $locations );
                    ?>;
                    
                    ( function( element, seed, interval ) {
                        var e = new Array( element, seed ).join( "-" );
                        window[ e ] = setInterval( function() {
                            if ( typeof window[ "jQuery" ] === "function" && typeof window[ "google" ] === "object" ) {
                                jQuery( document ).ready( function() {
                                    $frontend().run({
                                        "results_text": "<?php echo $attributes->results_text ?? "View {0} results"; ?>",
                                        "directions_text": "<?php echo $attributes->directions_text ?? "Directions"; ?>",
                                    });
                                });
                                
                                clearInterval( window[ e ] );
                                window[ e ] = null;
                            }
                        }, interval );
                    })( "filter", Date.now(), 100 );
                </script>
            </div><?php
            
            $html = ob_get_contents();
            ob_end_clean();
            
            return $html;
        }
        
        /**
         * 
         * @param array|string $attributes 
         * @param string $content 
         * @return string
         */
        
        public function getMap( $attributes, string $content = "" ) : string {
            if ( gettype( $attributes ) === "array" ) {
                $attributes = ( object ) $attributes;
            }
            
            ob_start();
            
            ?><script defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo $attributes->google_api_key; ?>&v=beta&libraries=marker&callback=mapRun"></script>
            
            <div data-pinpoints="map">
                <div id="pinpoints-map"></div>
            </div>
            
            <script>
                const m = $map();
                window.mapRun = function() {
                    m.run( "div#pinpoints-map", undefined, undefined, undefined );
                };
            </script><?php
            
            $html = ob_get_contents();
            ob_end_clean();
            
            return $html;
        }
        
    }