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
  <div class="promo-banner" style="
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
    <?php if ($attributes['background']['url'] || $attributes['mBackground']['url']) : ?>
      <div class="promo-banner__background">
        <?php if ($attributes['background']['url']) : ?>
          <?php if ($attributes['background']['url'] == 'banner--1.jpg') : ?>
            <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/banner--1.jpg" alt="image" />
          <?php elseif ($attributes['background']['url'] == 'banner-0.jpg') : ?>
            <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/banner-0.jpg" alt="image" />
          <?php elseif ($attributes['background']['url'] == 'banner-1.jpg') : ?>
            <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/banner-1.jpg" alt="image" />
          <?php elseif ($attributes['background']['url'] == 'banner-2.jpg') : ?>
            <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/banner-2.jpg" alt="image" />
          <?php elseif ($attributes['background']['url']) : ?>
            <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['background']['url'] ?>" alt="image" />
          <?php endif; ?>
        <?php endif; ?>
        <?php if ($attributes['mBackground']['url']) : ?>
          <?php if ($attributes['mBackground']['url'] == 'banner--1-mobile.jpg') : ?>
            <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/banner--1-mobile.jpg" alt="image" />
          <?php elseif ($attributes['mBackground']['url'] == 'banner-0-mobile.jpg') : ?>
            <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/banner-0-mobile.jpg" alt="image" />
          <?php elseif ($attributes['mBackground']['url'] == 'banner-1-mobile.jpg') : ?>
            <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/banner-1-mobile.jpg" alt="image" />
          <?php elseif ($attributes['mBackground']['url'] == 'banner-2-mobile.jpg') : ?>
            <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/banner-2-mobile.jpg" alt="image" />
          <?php elseif ($attributes['mBackground']['url']) : ?>
            <img class="only-mobile" src="<?= $attributes['mBackground']['url'] ?>" alt="image" />
          <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <div class="container">
      <div class="promo-banner__inner">
        <div class="promo-banner__container">
          <?php if ($attributes['title']) : ?>
            <h2 class="promo-banner__title"><?= $attributes['title'] ?></h2>
          <?php endif; ?>
          <?php if ($attributes['description']) : ?>
            <h3 class="promo-banner__description"><?= $attributes['description'] ?></h3>
          <?php endif; ?>
          <?php if ($attributes['button']) : ?>
            <div class="promo-banner__buttons">
              <a class="promo-banner__button" href="<?= $attributes['target'] ?>">
                <?= $attributes['button'] ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>