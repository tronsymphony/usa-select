<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

$page = get_page_by_path('blog');
$page3 = get_page_by_path('blog');


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
  'post_type' => 'post',
  'paged' => $paged,
);

if ($paged == 1) {
  $args['posts_per_page'] = 2;
  $args['offset'] = 0;
} else if ($paged == 2) {
  $args['posts_per_page'] = 6;
  $args['offset'] = 2;
} else if ($paged == 3) {
  $args['posts_per_page'] = 6;
  $args['offset'] = 8;
} else {
  $args['posts_per_page'] = 6;
  $args['offset'] = 14;
}

if (is_category()) {
  $args = array(
    'category_name' => get_queried_object()->slug,
    'post_type' => 'post',
    'posts_per_page' => 6,
    'paged' => get_query_var('paged'),
  );
}

if (is_tag()) {
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'paged' => get_query_var('paged'),
    'tax_query' => array(
      array(
        'taxonomy' => 'post_tag',
        'field' => 'slug',
        'terms' => [get_queried_object()->slug]
      )
    )
  );
}

if (is_post_type_archive('events')) {
  $args = array(
    'post_type' => 'events',
    'posts_per_page' => 6,
    'paged' => get_query_var('paged'),
  );
}

if (is_post_type_archive('services')) {
  $args = array(
    'post_type' => 'services',
    'posts_per_page' => 6,
    'paged' => get_query_var('paged'),
  );
}

if (is_post_type_archive('responsibilities')) {
  $args = array(
    'post_type' => 'responsibilities',
    'posts_per_page' => 6,
    'paged' => get_query_var('paged'),
  );
}

if (is_post_type_archive('library')) {
  $args = array(
    'post_type' => 'library',
    'posts_per_page' => 6,
    'paged' => get_query_var('paged'),
  );
}


$query = new WP_Query($args);

$page2 = null;

if ($query->found_posts <= 2) {
  $page2 = 1;
} else {
  $page2 = ceil((($query->found_posts - 2) / 6) + 1);
}

if (is_category()) {
  $page2 = null;
}

if (is_archive()) {
  $page2 = null;
}

if (is_tag()) {
  $page2 = null;
}

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="blog" style="
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
    <?php if (!is_post_type_archive('responsibilities') && !is_post_type_archive('library')) : ?>
      <div class="blog__hero">
        <div class="container">
          <div class="blog__hero-inner">
            <div class="blog__hero-text">
              <h2 class="blog__hero-title"><?php the_field('blog_title', $page->ID); ?></h2>
              <div class="blog__hero-content"><?php the_field('blog_description', $page->ID); ?></div>
              <?php if (get_field('blog_button', $page->ID)) : ?>
                <div class="blog__hero-buttons">
                  <div class="blog__hero-button">
                    <a class="link-button" href="<?php the_field('blog_button_link', $page->ID); ?>">
                      <?php the_field('blog_button', $page->ID); ?>
                    </a>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="blog__hero-background">
          <img src="<?php echo get_field('blog_background', $page->ID)['url']; ?>" class="only-desktop" alt="blog" />
          <img src="<?php echo get_field('blog_background_mobile', $page->ID)['url']; ?>" class="only-mobile" alt="blog" />
        </div>
      </div>
    <?php endif; ?>
    <?php if (is_post_type_archive('responsibilities') || is_post_type_archive('library')) : ?>
      <?= do_blocks('<!-- wp:banescocontigo/spacer {"gradient": "linear-gradient(93.27deg, #007953 -6.63%, #003C71 105.63%)", "paddings": {"desktop": {"top": "200px", "bottom": "0px"}, "mobile": {"top": "0px", "bottom": "0px"}}} /-->'); ?>
    <?php endif; ?>
    <?php if (get_field('blog_filters', $page->ID)) : ?>
      <div class="blog__filters">
        <div class="container">
          <div class="blog__filters-inner">
            <a class="blog__filters-item<?= (is_home() || is_category() || is_tag()) ? ' active' : '' ?>" href="/blog/"><?php echo get_field('blog_filters', $page->ID)['main']; ?></a>
            <a class="blog__filters-item<?= (is_post_type_archive('events')) ? ' active' : '' ?>" href="/blog/eventos/"><?php the_field('blog_filter_eventos', $page->ID); ?><?php echo get_field('blog_filters', $page->ID)['events']; ?></a>
            <a class="blog__filters-item<?= (is_post_type_archive('services')) ? ' active' : '' ?>" href="/blog/sroductos-y-servicios/"><?php echo get_field('blog_filters', $page->ID)['services']; ?></a>
            <a class="blog__filters-item<?= (is_post_type_archive('responsibilities')) ? ' active' : '' ?>" href="/blog/responsabilidad-social-empresarial/"><?php echo get_field('blog_filters', $page->ID)['responsibilities']; ?></a>
            <a class="blog__filters-item<?= (is_post_type_archive('library')) ? ' active' : '' ?>" href="/blog/biblioteca-digital-banesco/"><?php echo get_field('blog_filters', $page->ID)['library']; ?></a>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="blog__body">
      <div class="container">
        <div class="blog__inner">
          <div class="blog__content">
            <?php
            if ($paged == 1 && is_home()) :
            ?>
              <div class="blog__title-wrapper">
                <h3 class="blog__title">
                  <?php the_field('blog_popular_posts_title', $page->ID); ?>
                </h3>
              </div>
              <?php
              $posts = get_posts([
                'post_type'     => 'post',
                'posts_per_page'   => 3,
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC'
              ]);
              $post_categories1 = get_the_category($posts[0]);
              $post_categories2 = get_the_category($posts[1]);
              $post_categories3 = get_the_category($posts[2]);
              ?>
              <div class="blog__main-post">
                <a href="<?php echo the_permalink($posts[0]->ID); ?>" class="blog__main-post-image">
                  <?php echo get_the_post_thumbnail($posts[0]->ID); ?>
                </a>
                <div class="blog__main-post-inner">
                  <a href="<?php echo the_permalink($posts[0]->ID); ?>" class="blog__main-post-title">
                    <?php echo get_the_title($posts[0]->ID); ?>
                  </a>
                  <div class="blog__main-post-details">
                    <div class="blog__main-post-date">
                      <?php echo get_the_date(null, $posts[0]->ID); ?>
                    </div>
                    <div class="blog__main-post-tags">
                      <?php foreach ($post_categories1 as $category) :  ?>
                        <a href="/blog/category/<?php echo $category->slug; ?>" class="blog__main-post-tag"><?php echo $category->name; ?></a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                  <div class="blog__main-post-content">
                    <?php echo get_the_excerpt($posts[0]->ID); ?>
                  </div>
                  <div class="blog__main-post-buttons">
                    <a class="blog__main-post-button link-button" href="<?php the_permalink($posts[0]->ID); ?>">
                      <?php the_field('blog_read_more_button', $page->ID); ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="blog__other-posts">
                <div class="blog__other-post">
                  <a href="<?php echo the_permalink($posts[1]->ID); ?>" class="blog__other-post-title">
                    <?php echo get_the_title(null, $posts[1]->ID); ?>
                  </a>
                  <div class="blog__other-post-details">
                    <div class="blog__other-post-date">
                      <?php echo get_the_date(null, $posts[1]->ID); ?>
                    </div>
                    <div class="blog__other-post-tags">
                      <?php foreach ($post_categories2 as $category) :  ?>
                        <a href="/blog/category/<?php echo $category->slug; ?>" class="blog__other-post-tag"><?php echo $category->name; ?></a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                  <div class="blog__other-post-inner">
                    <div class="blog__other-post-image">
                      <?php echo get_the_post_thumbnail($posts[1]->ID); ?>
                    </div>
                    <div class="blog__other-post-content">
                      <div class="blog__other-post-text">
                        <?php echo get_the_excerpt($posts[1]->ID); ?>
                      </div>
                      <div class="blog__other-post-buttons">
                        <a class="blog__other-post-button link-button" href="<?php the_permalink($posts[1]->ID); ?>">
                          <?php the_field('blog_read_more_button', $page->ID); ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="blog__other-post">
                  <a href="<?php echo the_permalink($posts[2]->ID); ?>" class="blog__other-post-title">
                    <?php echo get_the_title(null, $posts[2]->ID); ?>
                  </a>
                  <div class="blog__other-post-details">
                    <div class="blog__other-post-date">
                      <?php echo get_the_date(null, $posts[2]->ID); ?>
                    </div>
                    <div class="blog__other-post-tags">
                      <?php foreach ($post_categories3 as $category) :  ?>
                        <a href="/blog/category/<?php echo $category->slug; ?>" class="blog__other-post-tag"><?php echo $category->name; ?></a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                  <div class="blog__other-post-inner">
                    <div class="blog__other-post-image">
                      <?php echo get_the_post_thumbnail($posts[2]->ID); ?>
                    </div>
                    <div class="blog__other-post-content">
                      <div class="blog__other-post-text">
                        <?php echo get_the_excerpt($posts[2]->ID); ?>
                      </div>
                      <div class="blog__other-post-buttons">
                        <a class="blog__other-post-button link-button" href="<?php the_permalink($posts[2]->ID); ?>">
                          <?php the_field('blog_read_more_button', $page->ID); ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
            <?php if (is_post_type_archive('responsibilities')) : ?>
              <div class="blog__title-wrapper">
                <h3 class="blog__title">
                  <?php the_field('blog_press_room_title', $page->ID); ?>
                </h3>
              </div>
              <?php
              $posts2 = get_posts([
                'post_type'     => 'responsibilities',
                'posts_per_page'   => 3,
                'order' => 'ASC'
              ]);
              ?>
              <div class="blog__main-post">
                <a href="<?php echo the_permalink($posts2[0]->ID); ?>" class="blog__main-post-image">
                  <?php echo get_the_post_thumbnail($posts2[0]->ID); ?>
                </a>
                <div class="blog__main-post-inner">
                  <a href="<?php echo the_permalink($posts2[0]->ID); ?>" class="blog__main-post-title">
                    <?php echo get_the_title($posts2[0]->ID); ?>
                  </a>
                  <div class="blog__main-post-details">
                    <div class="blog__main-post-date">
                      <?php echo get_the_date(null, $posts2[0]->ID); ?>
                    </div>
                    <div class="blog__main-post-tags">

                    </div>
                  </div>
                  <div class="blog__main-post-content">
                    <?php echo get_the_excerpt($posts2[0]->ID); ?>
                  </div>
                  <div class="blog__main-post-buttons">
                    <a class="blog__main-post-button link-button" href="<?php the_permalink($posts2[0]->ID); ?>">
                      <?php the_field('blog_read_more_button', $page->ID); ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="blog__other-posts">
                <div class="blog__other-post">
                  <a href="<?php echo the_permalink($posts2[1]->ID); ?>" class="blog__other-post-title">
                    <?php echo get_the_title(null, $posts2[1]->ID); ?>
                  </a>
                  <div class="blog__other-post-details">
                    <div class="blog__other-post-date">
                      <?php echo get_the_date(null, $posts2[1]->ID); ?>
                    </div>
                    <div class="blog__other-post-tags">

                    </div>
                  </div>
                  <div class="blog__other-post-inner">
                    <div class="blog__other-post-image">
                      <?php echo get_the_post_thumbnail($posts2[1]->ID); ?>
                    </div>
                    <div class="blog__other-post-content">
                      <div class="blog__other-post-text">
                        <?php echo get_the_excerpt($posts2[1]->ID); ?>
                      </div>
                      <div class="blog__other-post-buttons">
                        <a class="blog__other-post-button link-button" href="<?php the_permalink($posts2[1]->ID); ?>">
                          <?php the_field('blog_read_more_button', $page->ID); ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="blog__other-post">
                  <a href="<?php echo the_permalink($posts2[2]->ID); ?>" class="blog__other-post-title">
                    <?php echo get_the_title(null, $posts2[2]->ID); ?>
                  </a>
                  <div class="blog__other-post-details">
                    <div class="blog__other-post-date">
                      <?php echo get_the_date(null, $posts2[2]->ID); ?>
                    </div>
                    <div class="blog__other-post-tags">

                    </div>
                  </div>
                  <div class="blog__other-post-inner">
                    <div class="blog__other-post-image">
                      <?php echo get_the_post_thumbnail($posts2[2]->ID); ?>
                    </div>
                    <div class="blog__other-post-content">
                      <div class="blog__other-post-text">
                        <?php echo get_the_excerpt($posts2[2]->ID); ?>
                      </div>
                      <div class="blog__other-post-buttons">
                        <a class="blog__other-post-button link-button" href="<?php the_permalink($posts2[2]->ID); ?>">
                          <?php the_field('blog_read_more_button', $page->ID); ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
            <?php if (!is_post_type_archive('responsibilities') && !is_post_type_archive('library')) : ?>
              <?php if ($query->have_posts()) : ?>
                <div class="blog__title-wrapper">
                  <h3 class="blog__title">
                    <?php the_field('blog_the_last_title', $page->ID); ?>
                  </h3>
                </div>

                <div class="blog__posts">
                  <?php while ($query->have_posts()) : $query->the_post();                ?>
                    <div class="blog__post">
                      <a href="<?php echo the_permalink(); ?>" class="blog__post-image">
                        <?php echo get_the_post_thumbnail(); ?>
                      </a>
                      <div class="blog__post-inner">
                        <div class="blog__post-details">
                          <div class="blog__post-date">
                            <?php echo get_the_date(); ?> - <?php the_field('blog_visits_title', $page3->ID); ?>: <?php echo gt_get_post_view(); ?>
                          </div>
                        </div>
                        <a href="<?php echo the_permalink(); ?>" class="blog__post-title">
                          <?php echo get_the_title(); ?>
                        </a>
                        <div class="blog__post-content">
                          <?php echo get_the_excerpt(); ?>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                </div>
              <?php endif; ?>
              <div class="blog__pagination">
                <?php custom_pagination($query, $page2) ?>
              </div>
            <?php endif; ?>
            <?php if (is_post_type_archive('library')) : ?>
              <div class="blog__title-wrapper">
                <h3 class="blog__title">
                  <?php the_field('blog_library_title', $page->ID); ?>
                </h3>
              </div>
              <div class="blog__description text">
                <?php the_field('blog_library_description', $page->ID); ?>
              </div>
              <?php if (have_rows('blog_library_links', $page->ID)) : ?>
                <div class="blog__lines">
                  <?php while (have_rows('blog_library_links', $page->ID)) : the_row(); ?>
                    <?php if (get_sub_field('item')) : ?>
                      <div class="blog__line">
                        <a class="link-button" href="<?php echo get_sub_field('item')['link']; ?>"><?php echo get_sub_field('item')['title']; ?></a>
                      </div>
                    <?php endif; ?>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
            <?php endif; ?>
            <?php if (is_post_type_archive('library')) : ?>
              <?php
              $posts = get_posts([
                'post_type'     => 'library',
                'posts_per_page'   => 1,
              ]);
              $post_categories1 = get_the_category($posts[0]);
              ?>
              <div class="blog__block">
                <a class="blog__block-image" href="<?php echo the_permalink(); ?>">
                  <?php echo get_the_post_thumbnail($posts[0]->ID); ?>
                </a>
                <div class="blog__block-content">
                  <h3 class="blog__block-suptitle">
                    ÚLTIMA PUBLICACIÓN
                  </h3>
                  <a class="blog__block-title" href="<?php echo the_permalink(); ?>">
                    <?php echo get_the_title($posts[0]->ID); ?>
                  </a>
                  <div class="blog__block-details">
                    <div class="blog_block-date">
                      <?php echo get_the_date(null, $posts[0]->ID); ?>
                    </div>
                    <div class="blog__block-tags">
                      <a href="/blog/library/category/patrocinio" class="blog__block-tag">Patrocinio</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>
          <div class="blog__sidebar">
            <div class="blog__search">
              <div class="blog__search">
                <input class="blog__search-entry" type="text" placeholder="¿Qué estas buscando?" />
                <button class="blog__search-button" type="submit">
                  <svg>
                    <use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#search" />
                  </svg>
                </button>
              </div>
              <?php
              if ($paged == 1 && is_home()) :
              ?>
                <div class="blog__categories">
                  <div class="blog__categories-title">
                    <?php the_field('blog_categories_title', $page3->ID); ?>
                  </div>
                  <div class="blog__categories-list">
                    <ul>
                      <?php $categories = get_categories(array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                      ));
                      foreach ($categories as $category) : ?>
                        <li><a class="<?php if (get_queried_object()->slug === $category->slug) : ?> active<?php endif; ?>" href="/blog/category/<?php echo $category->slug; ?>"><?php echo $category->name ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
              <?php if (is_post_type_archive('responsibilities') || is_post_type_archive('library')) : ?>
                <div class="blog__categories">
                  <div class="blog__categories-title">
                    <?php the_field('blog_categories_title', $page3->ID); ?>
                  </div>
                  <div class="blog__categories-list">
                    <ul>
                      <?php $categories = get_categories(array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                      ));
                      foreach ($categories as $category) : ?>
                        <li><a class="<?php if (get_queried_object()->slug === $category->slug) : ?> active<?php endif; ?>" href="/blog/responsibilities/category/<?php echo $category->slug; ?>"><?php echo $category->name ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
            </div>
            <?php if (get_field('blog_instagram', $page3->ID)) : ?>
              <div class="blog__instagram">
                <a href="https://www.instagram.com/" class="blog__instagram-top">
                  <div class="blog__instagram-title">
                    <?php echo get_field('blog_instagram', $page3->ID)['profile_name']; ?> <img src="<?php the_block_url(__DIR__); ?>/assets/instagram-icon.png" alt="" />
                  </div>
                  <div class="blog__instagram-top-image">
                    <img src="<?php the_block_url(__DIR__); ?>/assets/instagram.png" alt="" />
                  </div>
                </a>
                <div class="blog__instagram-date">
                  <?php echo get_field('blog_instagram', $page3->ID)['post_date']; ?>
                </div>
                <div class="blog__instagram-image">
                  <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                </div>
                <div class="blog__instagram-text">
                  <?php echo get_field('blog_instagram', $page3->ID)['post_description']; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>