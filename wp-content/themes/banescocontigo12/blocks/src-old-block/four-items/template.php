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
  <div class="four-items" style="
      --paddings-top: <?= (isset($attributes['paddings']['desktop']['top'])) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= (isset($attributes['paddings']['mobile']['top'])) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= (isset($attributes['paddings']['desktop']['bottom'])) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= (isset($attributes['paddings']['mobile']['bottom'])) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= (isset($attributes['margins']['desktop']['top'])) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= (isset($attributes['margins']['mobile']['top'])) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= (isset($attributes['margins']['desktop']['bottom'])) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= (isset($attributes['margins']['mobile']['bottom'])) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= (isset($attributes['gradient'])) ? $attributes['gradient'] : '#fff' ?>;
    ">
    <div class="container">
      <?php if ($attributes['title']) : ?>
          <h2 class="four-items__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="four-items__inner">
          <?php foreach ($attributes['items'] as $item) : ?>
            <a class="four-items__item" href="<?= $item['link'] ?>">
              <div class="four-items__item-content">
                <?php if ($item['title']) : ?>
                  <h3 class="four-items__item-title">
                    <?= $item['title'] ?>
                  </h3>
                <?php endif; ?>
              </div>
              <?php if ($item['image']['url']) : ?>
                <div class="four-items__item-image">
                  <?php if ($item['image']['url'] == 'image-0.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/image-0.svg" alt="image" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="image" />
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>