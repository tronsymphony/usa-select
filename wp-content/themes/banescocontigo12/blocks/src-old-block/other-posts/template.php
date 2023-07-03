<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

$page = get_page_by_path('blog');

$post_id = get_the_ID();
$post_categories = get_the_category($post_id);
$post_tags = get_the_tags($post_id);
gt_set_post_view();

$posts = get_posts([
  'post_type'     => 'post',
  'posts_per_page'   => 2,
  'orderby' => 'rand',
  'post__not_in'   => [get_the_ID()]
]);

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="other-posts" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    ">
    <div class="container">
      <h2 class="other-posts__title">Otros posts que podrían interesarte</h2>
      <div class="other-posts__inner">
        <?php foreach ($posts as $post) : ?>
          <a class="other-posts__item" href="<?php the_permalink($post->ID); ?>">
            <div class="other-posts__item-image">
              <?php echo get_the_post_thumbnail($post->ID); ?>
            </div>
            <div class="other-posts__item-content">
              <div class="other-posts__item-details">
                <?php echo get_the_date(null, $post->ID); ?> - <?php echo gt_get_post_view($post->ID); ?>
              </div>
              <h3 class="other-posts__item-title">
                <?php echo get_the_title($post->ID); ?>
              </h3>
              <div class="other-posts__item-text">
                <?php echo get_the_excerpt($post->ID); ?>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>