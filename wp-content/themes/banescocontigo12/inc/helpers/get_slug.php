<?php

if (!function_exists("get_slug")) {
  /**
   * Returns the page or post slug.
   *
   * @param int|WP_Post|null $id (Optional) Post ID or post object. Defaults to global $post.
   * @return string
   */
  function get_slug($id = null)
  {
    $post = get_post($id);
    if (!empty($post)) return $post->post_name;
    return '';
  }
  /**
   * Display the page or post slug
   *
   * Uses get_slug() and applies 'the_slug' filter.
   *
   * @param int|WP_Post|null $id (Optional) Post ID or post object. Defaults to global $post.
   */
  function the_slug($id = null)
  {
    echo apply_filters('the_slug', get_slug($id));
  }
}
