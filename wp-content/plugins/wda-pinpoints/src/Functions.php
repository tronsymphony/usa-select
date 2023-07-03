<?php declare( strict_types = 1 );
    
    namespace WDAPinpoints\Functions;
    
    /**
     * Gets the application's root folder.
     * @return string The root folder of the application.
     */
    
    function get_root() : string {
        return realpath( dirname( __FILE__ ) . str_repeat( "/..", 1 ) );
    }
    
    /**
     * 
     * @return string
     */
    
    function get_plugin_url() {
        return preg_replace( "/\/src$/", "", plugins_url( "", __FILE__ ) );
    }
    
    /**
     * Compiles and serves the SCSS from the "/assets/scss" folder.
     * @param array $variables The variables to be pushed to the SCSS.
     */
    
    function get_compiled_css( array $variables = [] ) : void {
        $server = new \ScssPhp\Server\Server(
            get_root() . "/assets/scss/",
            get_root() . "/cache/",
            ( function() use ( $variables ) {
                $compiler = new \ScssPhp\ScssPhp\Compiler();
                $compiler->setImportPaths( get_root() . "/assets/scss/" );
                $compiler->setOutputStyle( \ScssPhp\ScssPhp\OutputStyle::COMPRESSED );
                $compiler->addVariables( $variables );
                return $compiler;
            })()
        );
        $server->serve();
    }