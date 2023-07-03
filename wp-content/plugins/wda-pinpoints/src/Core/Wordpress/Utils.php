<?php declare( strict_types = 1 );
    
    namespace WDAPinpoints\Core\Wordpress;
    
    use \WDAPinpoints\Core\Shortcodes;
    
    class Utils {
        
        /**
         * 
         */
        
        public function __construct() {
            
        }
        
        /**
         * 
         * @param \WP_Post|null $post 
         * @return boolean
         */
        
        public function hasShortcodes( ?\WP_Post $post ) : bool {
            global $post;
            
            if ( $post === null ) {
                return false;
            }
            
            $instance = ( new \ReflectionClass( Shortcodes::class ) )->newInstanceWithoutConstructor();
            foreach ( $instance->getShortcodes() as $name => $method ) {
                if ( has_shortcode( $post->post_content, $name ) === true ) {
                    return true;
                }
            }
            
            return false;
        }
        
        /**
         * 
         * @return array
         */
        
        public function getCategories() : array {
            return get_categories([
                "taxonomy" => "location_category",
                "orderby" => "name",
                "order" => "ASC",
                "hide_empty" => false
            ]);
        }
        
        /**
         * 
         * @param string $coordinates 
         * @return array
         */
        
        private function getCoordinates( string $coordinates ) : array {
            preg_match( "/(\-?\d+\.?\d*),?\s+?(\-?\d+\.?\d*)/", $coordinates, $matches );
            return [
                floatval( $matches[ 1 ] ?? 0 ),
                floatval( $matches[ 2 ] ?? 0 )
            ];
        }
        
        /**
         * 
         * @return array
         */
        
        public function getLocations() : array {
            $locations = get_posts([
                "post_type" => "location",
                "post_status" => "publish",
                "numberposts" => -1,
                "orderby" => "title",
                "order" => "ASC"
            ]);
            
            $results = [];
            foreach ( $locations as $location ) {
                $results[] = [
                    "id" => $location->ID,
                    "name" => $location->post_title,
                    "address" => nl2br(
                        get_post_meta( $location->ID, "address", true ),
                        true
                    ),
                    "categories" => array_map(
                        static function( $category ) {
                            return [
                                "id" => $category->term_id,
                                "name" => $category->name
                            ];
                        },
                        get_the_terms( $location->ID , "location_category" ) ?? ""
                    ),
                    "coordinates" => $this->getCoordinates(
                        get_post_meta( $location->ID, "coordinates", true )
                    ),
                    "phone_number" => get_post_meta( $location->ID, "phone_number", true ),
                    "office_hours" => nl2br(
                        get_post_meta( $location->ID, "office_hours", true ),
                        true
                    )
                ];
            }
            
            return $results;
        }
        
    }