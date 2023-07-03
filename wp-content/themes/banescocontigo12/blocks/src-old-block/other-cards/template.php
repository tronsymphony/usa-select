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
  <div class="other-cards" style="
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
      <?php if ($attributes['title']) : ?>
        <h2 class="other-cards__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="other-cards__inner">
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="other-cards__item">
              <?php if ($item['image']['url']) : ?>
                <div class="other-cards__item-image">
                  <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                  <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                  <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="image" />
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($item['title'] || $item['text']) : ?>
                <div class="other-cards__item-content">
                  <?php if ($item['title']) : ?>
                    <h3 class="other-cards__item-title"><?= $item['title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($item['title']) : ?>
                    <div class="other-cards__item-text"><?= $item['text'] ?></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($item['link'] || $item['button']) : ?>
                <div class="other-cards__item-buttons">
                  <?php if ($item['link']) : ?>
                    <a href="<?= $item['linkTarget'] ?>" class="other-cards__item-button link-button">
                      <?= $item['link'] ?>
                    </a>
                  <?php endif; ?>
                  <?php if ($item['button']) : ?>
                    <a href="<?= $item['buttonTarget'] ?>" class="other-cards__item-button primary-button">
                      <?= $item['button'] ?>
                    </a>
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