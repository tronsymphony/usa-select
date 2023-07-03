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
  <div class="animated-promo" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-shadow="<?= ($attributes['shadow']) ? "true" : "false" ?>">
    <div class="container">
      <div class="animated-promo__inner">
        <div class="animated-promo__content">
          <?php if ($attributes['title']) : ?>
            <h2 class="animated-promo__title"><?= $attributes['title'] ?></h2>
          <?php endif; ?>
          <?php if ($attributes['description']) : ?>
            <h3 class="animated-promo__description text"><?= $attributes['description'] ?></h3>
          <?php endif; ?>
          <?php if ($attributes['button']) : ?>
            <div class="animated-promo__buttons">
              <a class="animated-promo__button primary-button" href="<?= $attributes['target'] ?>">
                <?= $attributes['button'] ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
        <div class="animated-promo__images">
          <div class="animated-promo__images-left">
            <?php if ($attributes['images']['left']['url'] || $attributes['images']['mLeft']['url']) : ?>
              <div class="animated-promo__image">
                <?php if ($attributes['images']['left']['url']) : ?>
                  <?php if ($attributes['images']['left']['url'] == 'image-1.png') : ?>
                    <img class="<?= ($attributes['images']['mLeft']['url']) ? 'only-desktop' : ''; ?>" src="<?php the_block_url(__DIR__); ?>/assets/image-1.png" alt="image" />
                  <?php elseif ($attributes['images']['right']['url'] == 'image-2.png') : ?>
                    <img class="<?= ($attributes['images']['mLeft']['url']) ? 'only-desktop' : ''; ?>" src="<?php the_block_url(__DIR__); ?>/assets/image-2.png" alt="image" />
                  <?php elseif ($attributes['images']['left']['url']) : ?>
                    <img class="<?= ($attributes['images']['mLeft']['url']) ? 'only-desktop' : ''; ?>" src="<?= $attributes['images']['left']['url'] ?>" alt="image" />
                  <?php endif; ?>
                <?php endif; ?>
                <?php if ($attributes['images']['mLeft']['url']) : ?>
                  <?php if ($attributes['images']['mLeft']['url'] == 'image-1-mobile.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-1-mobile.png" alt="image" />
                  <?php elseif ($attributes['images']['mLeft']['url'] == 'image-2-mobile.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-2-mobile.png" alt="image" />
                  <?php elseif ($attributes['images']['mLeft']['url']) : ?>
                    <img class="only-mobile" src="<?= $attributes['images']['mLeft']['url'] ?>" alt="image" />
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="animated-promo__images-right">
            <?php if ($attributes['images']['right'] || $attributes['images']['mRight']['url']) : ?>
              <div class="animated-promo__image">
                <?php if ($attributes['images']['right']['url']) : ?>
                  <?php if ($attributes['images']['right']['url'] == 'image-1.png') : ?>
                    <img class="<?= ($attributes['images']['mRight']['url']) ? 'only-desktop' : ''; ?>" src="<?php the_block_url(__DIR__); ?>/assets/image-1.png" alt="image" />
                  <?php elseif ($attributes['images']['right']['url'] == 'image-2.png') : ?>
                    <img class="<?= ($attributes['images']['mRight']['url']) ? 'only-desktop' : ''; ?>" src="<?php the_block_url(__DIR__); ?>/assets/image-2.png" alt="image" />
                  <?php elseif ($attributes['images']['right']['url']) : ?>
                    <img class="<?= ($attributes['images']['mRight']['url']) ? 'only-desktop' : ''; ?>" src="<?= $attributes['images']['right']['url'] ?>" alt="image" />
                  <?php endif; ?>
                <?php endif; ?>
                <?php if ($attributes['images']['mRight']['url']) : ?>
                  <?php if ($attributes['images']['mRight']['url'] == 'image-1-mobile.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-1-mobile.png" alt="image" />
                  <?php elseif ($attributes['images']['mRight']['url'] == 'image-2-mobile.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-2-mobile.png" alt="image" />
                  <?php elseif ($attributes['images']['mRight']['url']) : ?>
                    <img class="only-mobile" src="<?= $attributes['images']['mRight']['url'] ?>" alt="image" />
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>