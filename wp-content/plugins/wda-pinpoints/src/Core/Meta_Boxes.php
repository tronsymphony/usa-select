<?php declare( strict_types = 1 );
    
    namespace WDAPinpoints\Core;
    
    class Meta_Boxes {
        
        /** @var string */
        const TEXT_DOMAIN = "pinpoints-domain";
        
        /** @var array */
        const SCREENS = [
            "location"
        ];
        
        /** @var array */
        const NONCE_FIELDS = [
            "yPDYqTMfXi3gyJOje3J8Rz4CVJ09QEpZ",
            "o1EhoVinEQ7Kk8oa77u4feY6U0poPFfL"
        ];
        
        /** @var array */
        private $fields = [
            [
                "label" => "Address",
                "id" => "address",
                "type" => "textarea",
                "note" => "<a href=\"javascript: void( 0 );\">Click here</a> to try to geolocate the property address.",
                "placeholder" => ""
            ],
            [
                "label" => "Coordinates",
                "id" => "coordinates",
                "type" => "text",
                "note" => "",
                "placeholder" => "Latitude and longitude (e.g. 25.761681, -80.191788)"
            ],
            [
                "label" => "Phone Number",
                "id" => "phone_number",
                "type" => "text",
                "note" => "",
                "placeholder" => ""
            ],
            [
                "label" => "Office Hours",
                "id" => "office_hours",
                "type" => "textarea",
                "note" => "",
                "placeholder" => ""
            ],
        ];
        
        /**
         * 
         */
        
        public function __construct() {
            add_action( "add_meta_boxes", array( $this, "setMetaBoxesDisplay" ) );
            add_action( "save_post", array( $this, "setMetaBoxesActions" ) );
        }
        
        /**
         * 
         */
        
        public function setMetaBoxesDisplay() : void {
            foreach ( self::SCREENS as $screen ) {
                add_meta_box(
                    "Location Details",
                    __( "Location Details", self::TEXT_DOMAIN ),
                    array( $this, "setMetaBoxesCallback" ),
                    $screen,
                    "advanced",
                    "high"
                );
            }
        }
        
        /**
         * 
         */
        
        public function setMetaBoxesActions( int $post_id ) {
            if ( isset( $_POST[ self::NONCE_FIELDS[ 1 ] ] ) === false ) {
                return $post_id;
            }
            
            $nonce = $_POST[ self::NONCE_FIELDS[ 1 ] ];
            if ( wp_verify_nonce( $nonce, self::NONCE_FIELDS[ 0 ] ) === false ) {
                return $post_id;
            }
            
            if ( defined( "DOING_AUTOSAVE" ) === true && DOING_AUTOSAVE ) {
                return $post_id;
            }
            
            foreach ( $this->fields as $field ) {
                $field = ( object ) $field;
                
                if ( isset( $_POST[ $field->id ] ) === true ) {
                    switch ( $field->type ) {
                        case "email":
                            $_POST[ $field->id ] = sanitize_email( $_POST[ $field->id ] );
                        break;
                        case "text":
                            $_POST[ $field->id ] = sanitize_text_field( $_POST[ $field->id ] );
                        break;
                    }
                    
                    update_post_meta( $post_id, $field->id, $_POST[ $field->id ] );
                }
                elseif ( $field->type === "checkbox" ) {
                    update_post_meta( $post_id, $field->id, "0" );
                }
            }
        }
        
        /**
         * 
         * @param \WP_Post $post 
         */
        
        public function setMetaBoxesCallback( \WP_Post $post ) : void {
            wp_nonce_field( self::NONCE_FIELDS[ 0 ], self::NONCE_FIELDS[ 1 ] );
            $output = "";
            
            foreach ( $this->fields as $field ) {
                $field = ( object ) $field;
                
                $label = "<label for=\"{$field->id}\">{$field->label}</label>";
                $value = get_post_meta( $post->ID, $field->id, true );
                
                if ( empty( $value ) === true ) {
                    if ( isset( $field->default ) === true ) {
                        $value = $field->default;
                    }
                }
                
                switch ( $field->type ) {
                    case "textarea":
                        $input = sprintf(
                            "<textarea id=\"%s\" name=\"%s\" rows=\"2\" placeholder=\"%s\">%s</textarea>%s",
                            $field->id,
                            $field->id,
                            $field->placeholder,
                            $value,
                            ( $field->note !== "" ) ? "<p class=\"note\">{$field->note}</p>" : ""
                        );
                    break;
                    default:
                        $input = sprintf(
                            "<input %s id=\"%s\" name=\"%s\" type=\"%s\" value=\"%s\" placeholder=\"%s\">%s",
                            ( $field->type !== "color" ) ? "style=\"width: 100%\"" : "",
                            $field->id,
                            $field->id,
                            $field->type,
                            $value,
                            $field->placeholder,
                            ( $field->note !== "" ) ? "<p class=\"note\">{$field->note}</p>" : ""
                        );
                    break;
                }
                
                $output .= "<tr><th>{$label}</th><td>{$input}</td></tr>";
            }
            
            echo "<table class=\"pinpoints form-table\"><tbody>{$output}</tbody></table>";
        }
        
    }