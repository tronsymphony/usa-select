<?php declare( strict_types = 1 );
    
    namespace WDAPinpoints\Core;
    
    class Custom_Posts {
        
        /** @var string */
        const TEXT_DOMAIN = "pinpoints-domain";
        
        /**
         * 
         */
        
        public function __construct() {
            add_action( "init", array( $this, "setLocationsTaxonomy" ), 0 );
            add_action( "init", array( $this, "setLocations" ), 0 );
        }
        
        /**
         * 
         * @return array
         */
        
        private function getLocationLabels() : array {
            return [
                "add_new_item" => __( "Add New Location", self::TEXT_DOMAIN ),
                "add_new" => __( "Add New", self::TEXT_DOMAIN ),
                "all_items" => __( "All Locations", self::TEXT_DOMAIN ),
                "archives" => __( "Location Archives", self::TEXT_DOMAIN ),
                "attributes" => __( "Location Attributes", self::TEXT_DOMAIN ),
                "edit_item" => __( "Edit Location", self::TEXT_DOMAIN ),
                "featured_image" => __( "Featured Image", self::TEXT_DOMAIN ),
                "filter_items_list" => __( "Filter locations list", self::TEXT_DOMAIN ),
                "insert_into_item" => __( "Insert into location", self::TEXT_DOMAIN ),
                "items_list_navigation" => __( "Locations list navigation", self::TEXT_DOMAIN ),
                "items_list" => __( "Locations list", self::TEXT_DOMAIN ),
                "menu_name" => __( "Locations", self::TEXT_DOMAIN ),
                "name_admin_bar" => __( "Location", self::TEXT_DOMAIN ),
                "name" => _x( "Locations", "Location General Name", self::TEXT_DOMAIN ),
                "new_item" => __( "New Location", self::TEXT_DOMAIN ),
                "not_found_in_trash" => __( "Not found in Trash", self::TEXT_DOMAIN ),
                "not_found" => __( "Not found", self::TEXT_DOMAIN ),
                "parent_item_colon" => __( "Parent Location:", self::TEXT_DOMAIN ),
                "remove_featured_image" => __( "Remove featured image", self::TEXT_DOMAIN ),
                "search_items" => __( "Search Location", self::TEXT_DOMAIN ),
                "set_featured_image" => __( "Set featured image", self::TEXT_DOMAIN ),
                "singular_name" => _x( "Location", "Location Singular Name", self::TEXT_DOMAIN ),
                "update_item" => __( "Update Location", self::TEXT_DOMAIN ),
                "uploaded_to_this_item" => __( "Uploaded to this location", self::TEXT_DOMAIN ),
                "use_featured_image" => __( "Use as featured image", self::TEXT_DOMAIN ),
                "view_item" => __( "View Location", self::TEXT_DOMAIN ),
                "view_items" => __( "View Locations", self::TEXT_DOMAIN ),
            ];
        }
        
        /**
         * 
         * @return array
         */
        
        private function getLocationArgs() : array {
            return [
                "can_export" => true,
                "capability_type" => "page",
                "description" => __( "Location Description", self::TEXT_DOMAIN ),
                "exclude_from_search" => true,
                "has_archive" => false,
                "hierarchical" => false,
                "label" => __( "Location", self::TEXT_DOMAIN ),
                "labels" => $this->getLocationLabels(),
                "menu_icon" => "dashicons-location",
                "menu_position" => 5,
                "public" => false,
                "publicly_queryable" => false,
                "rewrite" => false,
                "show_in_admin_bar" => true,
                "show_in_menu" => true,
                "show_in_nav_menus" => true,
                "show_ui" => true,
                "supports" => [
                    "title"
                ],
                "taxonomies" => [
                    "location_category"
                ],
            ];
        }
        
        /**
         * 
         */
        
        public function setLocations() : void {
            register_post_type( "location", $this->getLocationArgs() );
        }
        
        /**
         * 
         * @return array
         */
        
        private function getLocationsTaxonomyLabels() : array {
            return [
                "add_new_item" => __( "Add New Category", self::TEXT_DOMAIN ),
                "all_items" => __( "All Categories", self::TEXT_DOMAIN ),
                "edit_item" => __( "Edit Category", self::TEXT_DOMAIN ),
                "new_item_name" => __( "New Category Name", self::TEXT_DOMAIN ),
                "not_found" => __( "No Categories found", self::TEXT_DOMAIN ),
                "parent_item_colon" => __( "Parent Category:", self::TEXT_DOMAIN ),
                "parent_item" => __( "Parent Category", self::TEXT_DOMAIN ),
                "search_items" => __( "Search Categories", self::TEXT_DOMAIN ),
                "singular_name" => __( "Category", self::TEXT_DOMAIN ),
                "update_item" => __( "Update Category", self::TEXT_DOMAIN ),
                "view_item" => __( "View Category", self::TEXT_DOMAIN ),
            ];
        }
        
        /**
         * 
         * @return array
         */
        
        private function getLocationsTaxonomyArgs() : array {
            return [
                "hierarchical" => true,
                "labels" => $this->getLocationsTaxonomyLabels(),
                "query_var" => true,
                "rewrite" => false,
                "show_admin_column" => true,
                "show_in_rest" => true,
                "show_ui" => true,
            ];
        }
        
        /**
         * 
         */
        
        public function setLocationsTaxonomy() : void {
            register_taxonomy( "location_category", "location", $this->getLocationsTaxonomyArgs() );
            register_taxonomy_for_object_type( "location_category", "location" );
        }
        
    }