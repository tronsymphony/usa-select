<?php

if (!function_exists("get_theme_url")) {
  /**
   * Returns the theme url.
   *
   * @return string
   */
  function get_theme_url()
  {
    return esc_url(get_template_directory_uri());
  }
  /**
   * Display the theme url.
   *
   * Uses get_theme_url() and applies 'the_theme_url' filter.
   */
  function the_theme_url()
  {
    echo apply_filters('the_theme_url', get_theme_url());
  }
}