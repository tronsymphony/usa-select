<?php

if (!function_exists("get_theme_field")) {
  /**
   * Returns the theme field.
   *
   * @param string $key (Required) Key to the field.
   * @param string $default (Optional) Placeholder value of the field.
   * @return string
   */
  function get_theme_field($key, $default = '')
  {
    return get_theme_mod($key, $default);
  }
  /**
   * Display the page or post slug
   *
   * Uses get_theme_field() and applies 'the_theme_field' filter.
   *
   * @param string $key (Required) Key to the field.
   * @param string $default (Optional) Placeholder value of the field.
   */
  function the_theme_field($key, $default)
  {
    echo apply_filters('the_theme_field', get_theme_field($key, $default));
  }
}