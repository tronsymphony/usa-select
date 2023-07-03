<?php

if (!function_exists("get_block_url")) {
  /**
   * Returns the block url.
   *
   * @param string $dir (Required) Name of the block.
   * @return string
   */
  function get_block_url($dir)
  {
    return esc_url(get_template_directory_uri()) . '/blocks/src/' . basename($dir);
  }
  /**
   * Display the block url
   *
   * Uses get_block_url() and applies 'the_block_url' filter.
   *
   * @param string $dir (Required) Name of the block.
   */
  function the_block_url($dir)
  {
    echo apply_filters('the_block_url', get_block_url($dir));
  }
}
