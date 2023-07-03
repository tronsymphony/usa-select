<?php declare( strict_types = 1 );
    
    if ( file_exists( $autoload = realpath( dirname( __FILE__ ) ) . "/vendor/autoload.php" ) === false ) {
        die( "Please run \"composer install\" to install the application's dependencies." );
    }
    require_once( $autoload );
    
    define( "WP_USE_THEMES", false );
    require_once( "../../../wp-load.php" );
    
    use function \WDAPinpoints\Functions\{
        get_compiled_css,
        get_plugin_url
    };
    
    get_compiled_css([
        "plugins_url" => "\"" . get_plugin_url() . "\""
    ]);