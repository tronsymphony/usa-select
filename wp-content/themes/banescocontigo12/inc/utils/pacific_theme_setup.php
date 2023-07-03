<?php

/**
 * Sets up the base functionality for our base theme.
 */

class Pacific_theme_setup {
  public function __construct() {
		add_action( 'after_setup_theme', [$this, 'image_sizes'] );

    // Theme Options
		$this->options_page();
  }

  /**
	 * Adds Theme Settings option page
	 */
	public function options_page() {
		if( function_exists('acf_add_options_page') ) {
			$theme_options = acf_add_options_page( array(
				'page_title' => __('Theme Settings', 'pacific'),
				'menu_title' => __('Theme Settings', 'pacific'),
				'menu_slug'	 => 'theme-settings',
				'capability' => 'edit_posts',
				'redirect'   => false
			));
		}
	}

	public function image_sizes() {
		add_image_size( 'latest-posts', 271, 271, true );
		add_image_size( 'video-thumbnail', 464, 259, true );
		add_image_size( 'full-width', 1220, 762, true );
		add_image_size( 'mobile-width', 360, 267 );
	}

	public static function setPostViews( $postID ) {
		$count_key = 'post_views_count';
		$count = get_post_meta($postID, $count_key, true);

		if ( $count=='' ) :
				$count = 0;
				delete_post_meta($postID, $count_key);
				add_post_meta($postID, $count_key, '0');
		else :
				$count++;
				update_post_meta($postID, $count_key, $count);
		endif;
	}
}