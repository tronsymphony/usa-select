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
  <div class="banner-text" style="
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
      <div class="banner-text__inner">
        <div class="banner-text__content">
          <?php if ($attributes['title']) : ?>
            <h2 class="banner-text__title"><?= $attributes['title'] ?></h2>
          <?php endif; ?>
          <?php if ($attributes['description']) : ?>
            <h2 class="banner-text__description text"><?= $attributes['description'] ?></h2>
          <?php endif; ?>
          <?php if ($attributes['list1'] || $attributes['list2']) : ?>
            <div class="banner-text__lists">
              <?php if ($attributes['list1']) : ?>
                <div class="banner-text__list text">
                  <?= $attributes['list1'] ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['list2']) : ?>
                <div class="banner-text__list text">
                  <?= $attributes['list2'] ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
        <?php if ($attributes['image']['url'] || $attributes['mImage']['url']) : ?>
          <div class="banner-text__background">
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