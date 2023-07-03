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
  <div class="hero-empty" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --margins-title: <?= ($attributes['margins']['desktop']['title']) ? $attributes['margins']['desktop']['title'] : '0px' ?>;
      --margins-title--mobile: <?= ($attributes['margins']['mobile']['title']) ? $attributes['margins']['mobile']['title'] : '0px' ?>;
      --margins-description: <?= ($attributes['margins']['desktop']['description']) ? $attributes['margins']['desktop']['description'] : '0px' ?>;
      --margins-description--mobile: <?= ($attributes['margins']['mobile']['description']) ? $attributes['margins']['mobile']['description'] : '0px' ?>;
      --colors-title: <?= ($attributes['colors']['title']) ? $attributes['colors']['title'] : '#fff' ?>;
      --colors-description: <?= ($attributes['colors']['description']) ? $attributes['colors']['description'] : '#fff' ?>;
      --widths-title: <?= ($attributes['widths']['desktop']['title']) ? $attributes['widths']['desktop']['title'] : 'auto' ?>;
      --widths-title--mobile: <?= ($attributes['widths']['mobile']['title']) ? $attributes['widths']['mobile']['title'] : 'auto' ?>;
      --widths-description: <?= ($attributes['widths']['desktop']['description']) ? $attributes['widths']['desktop']['description'] : 'auto' ?>;
      --widths-description--mobile: <?= ($attributes['widths']['mobile']['description']) ? $attributes['widths']['mobile']['description'] : 'auto' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-big-text="<?= ($attributes['bigText']) ? "true" : "false" ?>">
    <div class="container">
      <div class="hero-empty__inner">
        <div class="hero-empty__content">
          <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
            <h2 class="hero-empty__title">
              <?php if ($attributes['title']['desktop']) : ?>
                <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['title']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
              <?php endif; ?>
            </h2>
          <?php endif; ?>
          <?php if ($attributes['description']['desktop'] || $attributes['description']['mobile']) : ?>
            <h3 class="hero-empty__description">
              <?php if ($attributes['description']['desktop']) : ?>
                <span class="<?= ($attributes['description']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['description']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['description']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['description']['mobile'] ?></span>
              <?php endif; ?>
            </h3>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>