<?php

function gt_get_post_view($id = NULL)
{
  $count = get_post_meta(is_null($id) ? get_the_ID() : $id, 'post_views_count', true) ? get_post_meta(is_null($id) ? get_the_ID() : $id, 'post_views_count', true) : 0;
  return $count;
}

function gt_set_post_view()
{
  $key = 'post_views_count';
  $post_id = get_the_ID();
  $count = (int) get_post_meta($post_id, $key, true);
  $count++;
  update_post_meta($post_id, $key, $count);
}


function gt_posts_column_views($columns)
{
  $columns['post_views'] = 'Views';
  return $columns;
}


function gt_posts_custom_column_views($column)
{
  if ($column === 'post_views') {
    echo gt_get_post_view();
  }
}

add_filter('manage_posts_columns', 'gt_posts_column_views');
add_action('manage_posts_custom_column', 'gt_posts_custom_column_views');