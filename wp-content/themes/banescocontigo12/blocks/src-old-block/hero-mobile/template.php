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
  <div class="hero-mobile" style="
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
      --margins-images: <?= ($attributes['margins']['desktop']['images']) ? $attributes['margins']['desktop']['images'] : '0px' ?>;
      --margins-images--mobile: <?= ($attributes['margins']['mobile']['images']) ? $attributes['margins']['mobile']['images'] : '0px' ?>;
      --colors-title: <?= ($attributes['colors']['title']) ? $attributes['colors']['title'] : '#fff' ?>;
      --colors-description: <?= ($attributes['colors']['description']) ? $attributes['colors']['description'] : '#fff' ?>;
      --widths-title: <?= ($attributes['widths']['desktop']['title']) ? $attributes['widths']['desktop']['title'] : 'auto' ?>;
      --widths-title--mobile: <?= ($attributes['widths']['mobile']['title']) ? $attributes['widths']['mobile']['title'] : 'auto' ?>;
      --widths-description: <?= ($attributes['widths']['desktop']['description']) ? $attributes['widths']['desktop']['description'] : 'auto' ?>;
      --widths-description--mobile: <?= ($attributes['widths']['mobile']['description']) ? $attributes['widths']['mobile']['description'] : 'auto' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    ">
    <div class="container">
      <div class="hero-mobile__inner">
        <div class="hero-mobile__content">
          <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
            <h2 class="hero-mobile__title">
              <?php if ($attributes['title']['desktop']) : ?>
                <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['title']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
              <?php endif; ?>
            </h2>
          <?php endif; ?>
          <?php if ($attributes['description']['desktop'] || $attributes['description']['mobile']) : ?>
            <div class="hero-mobile__description text">
              <?php if ($attributes['description']['desktop']) : ?>
                <span class="<?= ($attributes['description']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['description']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['description']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['description']['mobile'] ?></span>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['button']['desktop'] || $attributes['button']['mobile']) : ?>
            <div class="hero-mobile__buttons">
              <a class="hero-mobile__button <?= $attributes['button']['type'] ?>" href="<?= $attributes['button']['target'] ?>">
                <?php if ($attributes['button']['desktop']) : ?>
                  <span class="<?= ($attributes['button']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['button']['desktop'] ?></span>
                <?php endif; ?>
                <?php if ($attributes['button']['mobile']) : ?>
                  <span class="only-mobile"><?= $attributes['button']['mobile'] ?></span>
                <?php endif; ?>
              </a>
            </div>
          <?php endif; ?>
          <?php if ($attributes['images']['appstore'] || $attributes['images']['googleplay']) : ?>
            <div class="hero-mobile__images">
              <?php if ($attributes['images']['appstore']) : ?>
                <a class="hero-mobile__images-item" href="<?= $attributes['images']['appstore'] ?>">
                  <img src="<?php the_block_url(__DIR__); ?>/assets/appstore.png" alt="appstore" />
                </a>
              <?php endif; ?>
              <?php if ($attributes['images']['googleplay']) : ?>
                <a class="hero-mobile__images-item" href="<?= $attributes['images']['googleplay'] ?>">
                  <img src="<?php the_block_url(__DIR__); ?>/assets/googleplay.png" alt="googleplay" />
                </a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
        <?php if ($attributes['extra']['text'] || $attributes['extra']['image']['url']) : ?>
          <div class="hero-mobile__extra">
            <?php if ($attributes['extra']['text']) : ?>
              <div class="hero-mobile__extra-text">
                <?= $attributes['extra']['text'] ?>
              </div>
            <?php endif; ?>
            <?php if ($attributes['extra']['image']['url']) : ?>
              <div class="hero-mobile__extra-image">
                <?php if ($attributes['extra']['image']['url'] == 'qr.png') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/qr.png" alt="image" />
                <?php elseif ($attributes['extra']['image']['url']) : ?>
                  <img src="<?= $attributes['extra']['image']['url'] ?>" alt="image" />
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($attributes['background']['desktop']['url'] || $attributes['background']['mobile']['url']) : ?>
        <div class="hero-mobile__background">
          <?php if ($attributes['background']['desktop']['url']) : ?>
            <?php if ($attributes['background']['desktop']['url'] == 'background-1.jpg') : ?>
              <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-1.jpg" alt="background" />
            <?php elseif ($attributes['background']['desktop']['url']) : ?>
              <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['background']['desktop']['url'] ?>" alt="background" />
            <?php endif; ?>
          <?php endif; ?>
          <?php if ($attributes['background']['mobile']['url']) : ?>
            <?php if ($attributes['background']['mobile']['url'] == 'background-1-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-1-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url']) : ?>
              <img class="only-mobile" src="<?= $attributes['background']['mobile']['url'] ?>" alt="background" />
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>