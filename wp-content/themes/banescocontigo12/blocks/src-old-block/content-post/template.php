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
$post_tags = get_the_tags($post_id);

?>

<article <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="post" style="
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
      <div class="post__inner">
        <div class="post__content">
          <?php if ($attributes['content']) : ?>
            <div class="post__text text">
              <?= $attributes['content'] ?>
            </div>
          <?php endif; ?>
          <?php if ($post_tags) : ?>
            <div class="post__tags">
              <?php foreach ($post_tags as $tag) :  ?>
                <a href="/blog/tag/<?php echo $tag->slug ?>" class="post__tag"><?php echo $tag->name; ?></a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <div class="post__share">
            <span><?php echo get_field('post', $page->ID)['share']; ?>:</span>
            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&p[title]=<?php the_title(); ?>">
              <img src="<?php the_block_url(__DIR__); ?>/assets/facebook.svg" alt=""></a>
            <a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>">
              <img src="<?php the_block_url(__DIR__); ?>/assets/twitter.svg" alt=""></a>
            <a href="javascript:if(window.print)window.print()">
              <img src="<?php the_block_url(__DIR__); ?>/assets/print.svg" alt="">
            </a>
          </div>
        </div>
        <div class="post__sidebar">
          <div class="post__search">
            <input class="post__search-entry" type="text" placeholder="¿Qué estas buscando?" />
            <button class="post__search-button" type="submit">
              <svg>
                <use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#search" />
              </svg>
            </button>
          </div>
          <div class="post__posts">
            <?php
            $posts = get_posts([
              'post_type'     => 'post',
              'posts_per_page'   => 3,
              'meta_key' => 'post_views_count',
              'orderby' => 'meta_value_num',
              'order' => 'DESC'
            ]);
            ?>
            <div class="popular-posts">
              <h3 class="popular-posts__title"><?php echo get_field('post', $page->ID)['the_most_popular']; ?></h3>
              <div class="popular-posts__inner">
                <?php foreach ($posts as $post) : ?>
                  <a class="popular-posts__item" href="<?php the_permalink($post->ID); ?>">
                    <div class="popular-posts__item-image">
                      <?php the_post_thumbnail($post->ID); ?>
                    </div>
                    <div class="popular-posts__item-content">
                      <h3 class="popular-posts__item-title">
                        <?php echo get_the_title($post->ID); ?>
                      </h3>
                      <div class="popular-posts__item-details">
                        <?php echo get_the_date(null, $post->ID); ?> - VISITAS: <?php echo gt_get_post_view(); ?>
                      </div>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>