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
  <div class="promo-image-out" style="
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
      <div class="promo-image-out__inner" style="background: <?= ($attributes['background']) ? $attributes['background'] : '#fff' ?>;">
        <div class="promo-image-out__content">
          <?php if ($attributes['tags']) : ?>
            <div class="promo-image-out__tags">
              <?php foreach (explode(",", $attributes['tags']) as $tag) : ?>
                <div class="promo-image-out__tag">
                  <?= $tag ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['title']) : ?>
            <h2 class="promo-image-out__title"><?= $attributes['title'] ?></h2>
          <?php endif; ?>
          <?php if ($attributes['description']) : ?>
            <div class="promo-image-out__description"><?= $attributes['description'] ?></div>
          <?php endif; ?>
          <?php if ($attributes['button']['desktop']) : ?>
            <div class="promo-image-out__buttons">
              <a class="promo-image-out__button <?= $attributes['button']['type'] ?>" href="<?= $attributes['button']['target'] ?>">
                <?php if ($attributes['button']['desktop']) : ?>
                  <span class="<?= ($attributes['button']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['button']['desktop'] ?></span>
                <?php endif; ?>
                <?php if ($attributes['button']['mobile']) : ?>
                  <span class="only-mobile"><?= $attributes['button']['mobile'] ?></span>
                <?php endif; ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
        <?php if ($attributes['image']['url'] || $attributes['mImage']['url']) : ?>
          <div class="promo-image-out__image">
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