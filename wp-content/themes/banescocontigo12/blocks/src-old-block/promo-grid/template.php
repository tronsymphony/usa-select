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
  <div class="promo-grid" style="
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
      <div class="promo-grid__inner" style="background: <?= ($attributes['background']) ? $attributes['background'] : '#fff' ?>;">
        <div class="promo-grid__content">
          <?php if ($attributes['title']) : ?>
            <h2 class="promo-grid__title"><?= $attributes['title'] ?></h2>
          <?php endif; ?>
          <div class="promo-grid__list">
            <div class="promo-grid__list-item">
              <?php if ($attributes['item1title'] || $attributes['item1description']) : ?>
                <div class="promo-grid__item">
                  <?php if ($attributes['item1title']) : ?>
                    <h3 class="promo-grid__item-title"><?= $attributes['item1title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($attributes['item1description']) : ?>
                    <div class="promo-grid__item-description"><?= $attributes['item1description'] ?></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['item2title'] || $attributes['item2description']) : ?>
                <div class="promo-grid__item">
                  <?php if ($attributes['item2title']) : ?>
                    <h3 class="promo-grid__item-title"><?= $attributes['item2title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($attributes['item2description']) : ?>
                    <div class="promo-grid__item-description"><?= $attributes['item2description'] ?></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="promo-grid__list-item">
              <?php if ($attributes['item3title'] || $attributes['item3description']) : ?>
                <div class="promo-grid__item">
                  <?php if ($attributes['item3title']) : ?>
                    <h3 class="promo-grid__item-title"><?= $attributes['item3title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($attributes['item3description']) : ?>
                    <div class="promo-grid__item-description"><?= $attributes['item3description'] ?></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['item4title'] || $attributes['item4description']) : ?>
                <div class="promo-grid__item">
                  <?php if ($attributes['item4title']) : ?>
                    <h3 class="promo-grid__item-title"><?= $attributes['item4title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($attributes['item4description']) : ?>
                    <div class="promo-grid__item-description"><?= $attributes['item4description'] ?></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php if ($attributes['image']['url'] || $attributes['mImage']['url']) : ?>
          <div class="promo-grid__image">
            <?php if ($attributes['image']['url']) : ?>
              <?php if ($attributes['image']['url'] == 'image.png') : ?>
                <img class="<?= ($attributes['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/image.png" alt="image" />
              <?php elseif ($attributes['image']['url']) : ?>
                <img class="<?= ($attributes['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['image']['url'] ?>" alt="image" />
              <?php endif; ?>
            <?php endif; ?>
            <?php if ($attributes['mImage']['url']) : ?>
              <?php if ($attributes['mImage']['url'] == 'image-mobile.png') : ?>
                <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-mobile.png" alt="image" />
              <?php elseif ($attributes['mImage']['url']) : ?>
                <img class="only-mobile" src="<?= $attributes['mImage']['url'] ?>" alt="image" />
              <?php endif; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>