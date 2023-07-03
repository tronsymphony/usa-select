<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="banner-post" style="
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
      <div class="banner-post__inner">
        <?php if ($attributes['image']['desktop']['url'] || $attributes['image']['mobile']['url']) : ?>
          <div class="banner-post__background">
            <?php if ($attributes['image']['desktop']['url']) : ?>
              <?php if ($attributes['image']['desktop']['url'] == 'image.jpg') : ?>
                <img class="<?= ($attributes['image']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/image.jpg" alt="image" />
              <?php elseif ($attributes['image']['desktop']['url']) : ?>
                <img class="<?= ($attributes['image']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['image']['desktop']['url'] ?>" alt="image" />
              <?php endif; ?>
            <?php endif; ?>
            <?php if ($attributes['image']['mobile']['url']) : ?>
              <?php if ($attributes['image']['mobile']['url']) : ?>
                <img class="only-mobile" src="<?= $attributes['mImage']['url'] ?>" alt="image" />
              <?php endif; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>