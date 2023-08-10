<?php
// Language support
load_theme_textdomain( 'pacific', get_template_directory() . '/languages' );

// All of the base theme functions
require_once(get_template_directory() . '/inc/class-pacific-theme-setup.php');
require_once(get_template_directory() . '/inc/class-pacific-helper.php');
require_once(get_template_directory() . '/inc/class-pacific-admin.php');
require_once(get_template_directory() . '/inc/class-pacific-gutenberg.php');
require_once(get_template_directory() . '/inc/class-pacific-routes.php');
require_once(get_template_directory() . '/inc/class-pacific-custom-hooks.php');

/** 
 * Helpers.
 */
require get_template_directory() . '/inc/helpers/get_block_url.php';
require get_template_directory() . '/inc/helpers/get_slug.php';
require get_template_directory() . '/inc/helpers/get_theme_field.php';
require get_template_directory() . '/inc/helpers/get_theme_url.php';

/**
 * Customizers additions.
 */
require get_template_directory() . '/inc/customizers/customizer_header.php';
require get_template_directory() . '/inc/customizers/customizer_footer.php';
require get_template_directory() . '/inc/customizers/customizer_chat.php';
require get_template_directory() . '/inc/customizers/customizer_banner.php';

$theme_setup = new Pacific_Theme_Setup;

$theme_setup->addNavMenus( array( 
	'primary' => __( 'Primary Menu', 'pacific' ),
	'general-primary' => __( 'General Primary Menu', 'pacific' ),
	'footer_menu' => __( 'Footer Links', 'pacific' )
) );

// Styles and scripts
add_action( 'wp_enqueue_scripts', function() {

	// App style
	if ( file_exists( get_template_directory() . '/dist/css/app.min.css' ) ) :
		$csstime = filemtime( get_template_directory() . '/dist/css/app.min.css' );
		wp_enqueue_style( 'app', get_template_directory_uri() . '/dist/css/app.min.css', array(), $csstime );
	endif;

	if (is_page_template('custom-templates/template-general.php')) {
		// Legacy style
		if ( file_exists( get_template_directory() . '/build/legacy-css/legacy-sass.min.css' ) ) :
			$csstime = filemtime( get_template_directory() . '/build/legacy-css/legacy-sass.min.css' );
			wp_enqueue_style( 'legacy', get_template_directory_uri() . '/build/legacy-css/legacy-sass.min.css', array(), $csstime );
		endif;
		
		// Legacy script
		if ( file_exists( get_template_directory() . '/build/legacy-js/legacy-custom.min.js' ) ) :
			$jstime = filemtime( get_template_directory() . '/build/legacy-js/legacy-custom.min.js' );
			wp_enqueue_script( 'legacy', get_template_directory_uri() . '/build/legacy-js/legacy-custom.min.js', array(), $jstime, true );
		endif;
	} else {
		// Custom style
		if ( file_exists( get_template_directory() . '/build/css/custom.min.css' ) ) :
			$csstime = filemtime( get_template_directory() . '/build/css/custom.min.css' );
			wp_enqueue_style( 'custom', get_template_directory_uri() . '/build/css/custom.min.css', array(), $csstime );
		endif;

		// Custom script
		if ( file_exists( get_template_directory() . '/build/js/custom.min.js' ) ) :
			$jstime = filemtime( get_template_directory() . '/build/js/custom.min.js' );
			wp_enqueue_script( 'custom', get_template_directory_uri() . '/build/js/custom.min.js', array(), $jstime, true );
		endif;

		wp_enqueue_script( 'trig-js', 'https://cdn.jsdelivr.net/npm/trig-js/src/trig.min.js', array(), '1.0.0', true );
	}

	// App script
	if ( file_exists( get_template_directory() . '/dist/js/app.min.js' ) ) :
		$jstime = filemtime( get_template_directory() . '/dist/js/app.min.js' );
		wp_enqueue_script( 'app', get_template_directory_uri() . '/dist/js/app.min.js', array(), $jstime, true );
	endif;
});
