<?php
// Language support
load_theme_textdomain( 'pacific', get_template_directory() . '/languages' );

// All of the base theme functions
require_once(get_template_directory() . '/inc/class-pacific-theme-setup.php');
require_once(get_template_directory() . '/inc/class-pacific-helper.php');
require_once(get_template_directory() . '/inc/class-pacific-admin.php');
require_once(get_template_directory() . '/inc/class-pacific-gutenberg.php');

// Theme specific functions
require_once(get_template_directory() . '/inc/class-pacific-custom-hooks.php');

$theme_setup = new Pacific_Theme_Setup;



$theme_setup->addNavMenus( array( 
	'primary' => __( 'Primary Menu', 'pacific' )
) );

// Styles and scripts
add_action( 'wp_enqueue_scripts', function() {

	// Bootstrap style
	if ( file_exists( get_template_directory() . '/dist/vendor/bootstrap.min.css' ) ) :
		$csstime = filemtime( get_template_directory() . '/dist/vendor/bootstrap.min.css' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/dist/vendor/bootstrap.min.css', array(), $csstime );
	endif;

	// Animate style
	if ( file_exists( get_template_directory() . '/dist/vendor/animate/animate.min.css' ) ) :
		$csstime = filemtime( get_template_directory() . '/dist/vendor/animate/animate.min.css' );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/dist/vendor/animate/animate.min.css', array(), $csstime );
	endif;

	// App style
	if ( file_exists( get_template_directory() . '/dist/css/app.min.css' ) ) :
		$csstime = filemtime( get_template_directory() . '/dist/css/app.min.css' );
		wp_enqueue_style( 'app', get_template_directory_uri() . '/dist/css/app.min.css', array(), $csstime );
	endif;

	// wow script
	if ( file_exists( get_template_directory() . '/dist/vendor/wow/wow.min.js' ) ) :
		$jstime = filemtime( get_template_directory() . '/dist/vendor/wow/wow.min.js' );
		wp_enqueue_script( 'wow', get_template_directory_uri() . '/dist/vendor/wow/wow.min.js', array(), $jstime, true );
	endif;

	// easing script
	if ( file_exists( get_template_directory() . '/dist/vendor/easing/easing.min.js' ) ) :
		$jstime = filemtime( get_template_directory() . '/dist/vendor/easing/easing.min.js' );
		wp_enqueue_script( 'easing', get_template_directory_uri() . '/dist/vendor/easing/easing.min.js', array(), $jstime, true );
	endif;

	// waypoints script
	if ( file_exists( get_template_directory() . '/dist/vendor/waypoints/waypoints.min.js' ) ) :
		$jstime = filemtime( get_template_directory() . '/dist/vendor/waypoints/waypoints.min.js' );
		wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/dist/vendor/waypoints/waypoints.min.js', array(), $jstime, true );
	endif;

	// isotope script
	if ( file_exists( get_template_directory() . '/dist/vendor/isotope/isotope.pkgd.min.js' ) ) :
		$jstime = filemtime( get_template_directory() . '/dist/vendor/isotope/isotope.pkgd.min.js' );
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/dist/vendor/isotope/isotope.pkgd.min.js', array(), $jstime, true );
	endif;

	// App script
	if ( file_exists( get_template_directory() . '/dist/js/app.min.js' ) ) :
		$jstime = filemtime( get_template_directory() . '/dist/js/app.min.js' );
		wp_enqueue_script( 'app', get_template_directory_uri() . '/dist/js/app.min.js', array(), $jstime, true );
	endif;
});

// add_filter('use_block_editor_for_post_type', '__return_true', 10, 2);

// Add a customizer option for the logo
function theme_customizer_logo($wp_customize) {
  $wp_customize->add_section('theme_logo_section', array(
    'title' => 'Header Logo',
    'priority' => 30,
  ));
  
  $wp_customize->add_setting('theme_logo');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_logo', array(
    'label' => 'Upload or Select a Logo',
    'section' => 'theme_logo_section',
    'settings' => 'theme_logo',
  )));
}
add_action('customize_register', 'theme_customizer_logo');

