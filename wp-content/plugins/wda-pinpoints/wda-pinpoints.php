<?php declare( strict_types = 1 );
    
    // Plugin Name: Pinpoints
    // Plugin URI: https://webdev.army
    // Description: A tool for businesses with multiple locations, as it helps customers easily find the location nearest to them.
    // Version: 0.0.1
    // Author: Cosmin M. <general@webdev.army>
    // Author URI: https://webdev.army
    // License: GPL3
    // License URI: https://www.gnu.org/licenses/gpl-3.0.html
    
    if ( file_exists( $autoload = realpath( dirname( __FILE__ ) ) . "/vendor/autoload.php" ) === false ) {
        die( "Please run \"composer install\" to install the application's dependencies." );
    }
    require_once( $autoload );
    
    new \WDAPinpoints\Core\Custom_Posts();
    new \WDAPinpoints\Core\Meta_Boxes();
    new \WDAPinpoints\Core\Shortcodes();
    
    /**
     * 
     * @return void
     */
    
    function wda_pinpoints_on_register() : void {
        flush_rewrite_rules();
    }
    
    /**
     * 
     */
    
    register_activation_hook(
        __FILE__,
        "wda_pinpoints_on_register"
    );
    
    /**
     * 
     */
    
    add_action( "admin_enqueue_scripts", function() : void {
        wp_enqueue_style( "pinpoints-backend-style", plugins_url( "style.scss.php", __FILE__ ) . "/backend.scss" );
        wp_enqueue_script( "pinpoints-backend-script", plugins_url( "assets/js/backend.js", __FILE__ ), [ "jquery-core" ] );
    });
    
    /**
     * 
     */
    
    add_action( "wp_enqueue_scripts", function() : void {
        global $post;
        
        if ( ( new \WDAPinpoints\Core\Wordpress\Utils() )->hasShortcodes( $post ) === true ) {
            wp_enqueue_style( "fonts-lato", "https://fonts.googleapis.com/css2?family=Lato:wght@300;400;600;700&display=swap" );
            wp_enqueue_style( "pinpoints-frontend-style", plugins_url( "style.scss.php", __FILE__ ) . "/frontend.scss" );
            wp_enqueue_script( "pinpoints-frontend-script", plugins_url( "assets/js/frontend.js", __FILE__ ), [ "jquery-core" ] );
            wp_enqueue_script( "pinpoints-map-script", plugins_url( "assets/js/lib/map.js", __FILE__ ), [] );
            wp_enqueue_script( "pinpoints-fuse-script", plugins_url( "assets/js/lib/fuse-6.6.2.min.js", __FILE__ ), [] );
            
            wp_localize_script( "pinpoints-frontend-script", "\$pinpoints_globals", [
                "plugins_url" => plugins_url( "", __FILE__ )
            ]);
        }
    });