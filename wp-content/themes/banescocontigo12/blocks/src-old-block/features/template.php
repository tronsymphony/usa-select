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
  <div class="features features-column-count_<?= ($attributes['columns']) ? $attributes['columns']['type'] : '5' ?>" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-big-images="<?= ($attributes['bigImages']) ? "true" : "false" ?>">
    <div class="container">
      <?php if ($attributes['items'] && count($attributes['items']) > 0) : ?>
        <div class="features__inner" style="<?= ($attributes['centered']) ? "justify-content: center" : "" ?>">
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="features__item" style="
                --widths-title: <?= ($item['widths']['title']) ? $item['widths']['title'] : '300px' ?>;
                --widths-title--mobile: <?= ($item['widths']['mTitle']) ? $item['widths']['mTitle'] : '100%' ?>;
                --widths-text: <?= ($item['widths']['text']) ? $item['widths']['text'] : '300px' ?>;
                --widths-text--mobile: <?= ($item['widths']['mText']) ? $item['widths']['mText'] : '100%' ?>;
								">
              <?php if ($item['image']['url']) : ?>
                <div class="features__item-image">
                  <?php if ($item['image']['url'] == 'check.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/check.svg" alt="image" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="image" />
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($item['title'] || $item['text']) : ?>
                <div class="features__item-content">
                  <?php if ($item['title'] || $item['mTitle']) : ?>
                    <h3 class="features__item-title">
                      <?php if ($item['title']) : ?>
                        <span class="<?= ($item['mTitle']) ? 'only-desktop' : '' ?>"><?= $item['title'] ?></span>
                      <?php endif; ?>
                      <?php if ($item['mTitle']) : ?>
                        <span class="only-mobile"><?= $item['mTitle'] ?></span>
                      <?php endif; ?>
                    </h3>
                  <?php endif; ?>
                  <?php if ($item['text'] || $item['mText']) : ?>
                    <div class="features__item-text text">
                      <?php if ($item['text']) : ?>
                        <span class="<?= ($item['mText']) ? 'only-desktop' : '' ?>"><?= $item['text'] ?></span>
                      <?php endif; ?>
                      <?php if ($item['mText']) : ?>
                        <span class="only-mobile"><?= $item['mText'] ?></span>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>