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
  <div class="hero-image" style="
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
      --margins-button: <?= ($attributes['margins']['desktop']['button']) ? $attributes['margins']['desktop']['button'] : '0px' ?>;
      --margins-button--mobile: <?= ($attributes['margins']['mobile']['button']) ? $attributes['margins']['mobile']['button'] : '0px' ?>;
      --colors-title: <?= ($attributes['colors']['title']) ? $attributes['colors']['title'] : '#fff' ?>;
      --colors-description: <?= ($attributes['colors']['description']) ? $attributes['colors']['description'] : '#fff' ?>;
      --widths-title: <?= ($attributes['widths']['desktop']['title']) ? $attributes['widths']['desktop']['title'] : 'auto' ?>;
      --widths-title--mobile: <?= ($attributes['widths']['mobile']['title']) ? $attributes['widths']['mobile']['title'] : 'auto' ?>;
      --widths-description: <?= ($attributes['widths']['desktop']['description']) ? $attributes['widths']['desktop']['description'] : 'auto' ?>;
      --widths-description--mobile: <?= ($attributes['widths']['mobile']['description']) ? $attributes['widths']['mobile']['description'] : 'auto' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-big-text="<?= ($attributes['bigText']) ? "true" : "false" ?>">
    <div class="container">
      <div class="hero-image__inner">
        <div class="hero-image__content">
          <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
            <h2 class="hero-image__title">
              <?php if ($attributes['title']['desktop']) : ?>
                <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['title']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
              <?php endif; ?>
            </h2>
          <?php endif; ?>
          <?php if ($attributes['description']['desktop'] || $attributes['description']['mobile']) : ?>
            <div class="hero-image__description text">
              <?php if ($attributes['description']['desktop']) : ?>
                <span class="<?= ($attributes['description']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['description']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['description']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['description']['mobile'] ?></span>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['button']['desktop'] || $attributes['button']['mobile']) : ?>
            <div class="hero-image__buttons">
              <a class="hero-image__button <?= $attributes['button']['type'] ?>" href="<?= $attributes['button']['target'] ?>">
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
        <?php if ($attributes['image']['desktop']['url'] || $attributes['image']['mobile']['url']) : ?>
          <div class="hero-image__image" style="
            --image-width: <?= ($attributes['image']['width']['desktop']) ? $attributes['image']['width']['desktop'] : 'auto' ?>;
            --image-width--mobile: <?= ($attributes['image']['width']['mobile']) ? $attributes['image']['width']['mobile'] : 'auto' ?>;
            --image-height: <?= ($attributes['image']['height']['desktop']) ? $attributes['image']['height']['desktop'] : 'auto' ?>;
            --image-height--mobile: <?= ($attributes['image']['height']['mobile']) ? $attributes['image']['height']['mobile'] : 'auto' ?>;
            --image-position-top: <?= ($attributes['image']['position']['desktop']['top']) ? $attributes['image']['position']['desktop']['top'] : '0px' ?>;
            --image-position-right: <?= ($attributes['image']['position']['desktop']['right']) ? $attributes['image']['position']['desktop']['right'] : '0px' ?>;
            --image-position-bottom: <?= ($attributes['image']['position']['desktop']['bottom']) ? $attributes['image']['position']['desktop']['bottom'] : '0px' ?>;
            --image-position-left: <?= ($attributes['image']['position']['desktop']['left']) ? $attributes['image']['position']['desktop']['left'] : '0px' ?>;
            --image-position-top--mobile: <?= ($attributes['image']['position']['mobile']['top']) ? $attributes['image']['position']['mobile']['top'] : '0px' ?>;
            --image-position-right--mobile: <?= ($attributes['image']['position']['mobile']['right']) ? $attributes['image']['position']['mobile']['right'] : '0px' ?>;
            --image-position-bottom--mobile: <?= ($attributes['image']['position']['mobile']['bottom']) ? $attributes['image']['position']['mobile']['bottom'] : '0px' ?>;
            --image-position-left--mobile: <?= ($attributes['image']['position']['mobile']['left']) ? $attributes['image']['position']['mobile']['left'] : '0px' ?>;
          ">
            <?php if ($attributes['image']['desktop']['url']) : ?>
              <?php if ($attributes['image']['desktop']['url'] == 'image-1.png') : ?>
                <img class="<?= ($attributes['image']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/image-1.png" alt="image" />
              <?php elseif ($attributes['image']['desktop']['url'] == 'image-2.png') : ?>
                <img class="<?= ($attributes['image']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/image-2.png" alt="image" />
              <?php elseif ($attributes['image']['desktop']['url']) : ?>
                <img class="<?= ($attributes['image']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['image']['desktop']['url'] ?>" alt="image" />
              <?php endif; ?>
            <?php endif; ?>
            <?php if ($attributes['image']['mobile']['url']) : ?>
              <?php if ($attributes['image']['mobile']['url'] == 'image-1-mobile.png') : ?>
                <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-1-mobile.png" alt="image" />
              <?php elseif ($attributes['image']['mobile']['url'] == 'image-2-mobile.png') : ?>
                <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-2-mobile.png" alt="image" />
              <?php elseif ($attributes['image']['mobile']['url']) : ?>
                <img class="only-mobile" src="<?= $attributes['image']['mobile']['url'] ?>" alt="image" />
              <?php endif; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($attributes['background']['desktop']['url'] || $attributes['background']['mobile']['url']) : ?>
        <div class="hero-image__background">
          <?php if ($attributes['background']['desktop']['url']) : ?>
            <?php if ($attributes['background']['desktop']['url'] == 'background-1.jpg') : ?>
              <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-1.jpg" alt="background" />
            <?php elseif ($attributes['background']['desktop']['url'] == 'background-2.jpg') : ?>
              <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-2.jpg" alt="background" />
            <?php elseif ($attributes['background']['desktop']['url']) : ?>
              <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['background']['desktop']['url'] ?>" alt="background" />
            <?php endif; ?>
          <?php endif; ?>
          <?php if ($attributes['background']['mobile']['url']) : ?>
            <?php if ($attributes['background']['mobile']['url'] == 'background-1-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-1-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-2-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-2-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url']) : ?>
              <img class="only-mobile" src="<?= $attributes['background']['mobile']['url'] ?>" alt="background" />
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>