<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

$page = get_page_by_path('promociones');

if (isset($_GET['category'])) {
  $args = array(
    'post_type' => 'promociones',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'promociones-categories',
        'field' => 'slug',
        'terms' => [trim($_GET["category"])]
      )
    )
  );
} else {
  $args = array(
    'post_type' => 'promociones',
    'posts_per_page' => -1
  );
}

$query = new WP_Query($args);

$term_query = new WP_Term_Query(array(
  'taxonomy' => 'promociones-categories',
  'orderby'                => 'name',
  'order'                  => 'ASC',
  'child_of'               => 0,
  'parent'                 => 0,
  'fields'                 => 'all',
  'hide_empty'             => false,
));

$post_id = get_the_ID();
$post_categories = get_the_terms($post_id, 'promociones-categories');

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="promotions" style="
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
    <div class="promotions__filters">
      <button class="misha_button promotions__filter<?php if (!isset($_GET['category'])) : ?> active<?php endif; ?>" data-slug="all"><?= $attributes['viewAll'] ?></button>
      <?php foreach ($term_query->terms as $term) :  ?>
        <button class="misha_button promotions__filter<?php if (isset($_GET['category']) && trim($_GET["category"]) === $term->slug) : ?> active<?php endif; ?>" data-slug="<?php echo $term->slug ?>"><?php echo $term->name ?></button>
      <?php endforeach; ?>
    </div>
    <div class="container">
      <div class="promotions__inner">
        <?php if ($query->have_posts()) : ?>
          <div class="promotions__posts" id="category-post-content">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
              <?php $post_id = get_the_ID();  ?>
              <?php $post_categories = get_the_terms($post_id, 'promociones-categories'); ?>
              <div class="promotions__post">
                <a class="promotions__post-image" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
                </a>
                <div class="promotions__post-content">
                  <a class="promotions__post-title" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                  <a class="promotions__post-excerpt" href="<?php the_permalink(); ?>">
                    <?php the_excerpt(); ?>
                  </a>
                  <?php if ($post_categories) : ?>
                    <div class="promotions__post-categories">
                      <?php foreach ($post_categories as $category) :  ?>
                        <a class="promotions__post-category" href="?category=<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile;
            wp_reset_query(); ?>
          </div>
        <?php else : ?>
          <div class="promotions__no-posts"><?= $attributes['postsNotFound'] ?></div>
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>

<script>
  jQuery(function($) {
    function cats_ajax_get(id) {
      $.ajax({
        url: '<?php echo admin_url("admin-ajax.php") ?>',
        type: 'POST',
        data: {
          "action": "promotions",
          cat: id
        },
        success: function(data) {
          jQuery("#category-post-content").html(data);
          return false;
        }
      });
    }
    $(".misha_button").click(function() {
      $(".misha_button").removeClass("active");
      $(this).addClass("active");
      cats_ajax_get($(this).data('slug'));
    });
  });
</script>