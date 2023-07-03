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
  <div class="content" style="
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
      <div class="content__inner">
        <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
          <h2 class="content__title">
            <?php if ($attributes['title']['desktop']) : ?>
              <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
            <?php endif; ?>
            <?php if ($attributes['title']['mobile']) : ?>
              <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
            <?php endif; ?>
          </h2>
        <?php endif; ?>
        <?php if ($attributes['content']['desktop'] || $attributes['content']['mobile']) : ?>
          <div class="content__content text">
            <?php if ($attributes['content']['desktop']) : ?>
              <span class="<?= ($attributes['content']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['content']['desktop'] ?></span>
            <?php endif; ?>
            <?php if ($attributes['content']['mobile']) : ?>
              <span class="only-mobile"><?= $attributes['content']['mobile'] ?></span>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>