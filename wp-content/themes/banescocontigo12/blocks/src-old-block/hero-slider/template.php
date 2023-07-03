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
  <div class="hero-slider" style="
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
    ">
    <div class="container">
      <div class="hero-slider__inner">
        <div class="hero-slider__content">
          <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
            <h2 class="hero-slider__title">
              <?php if ($attributes['title']['desktop']) : ?>
                <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['title']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
              <?php endif; ?>
            </h2>
          <?php endif; ?>
          <?php if ($attributes['description']['desktop'] || $attributes['description']['mobile']) : ?>
            <div class="hero-slider__description text">
              <?php if ($attributes['description']['desktop']) : ?>
                <span class="<?= ($attributes['description']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['description']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['description']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['description']['mobile'] ?></span>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['button']['desktop'] || $attributes['button']['mobile']) : ?>
            <div class="hero-slider__buttons">
              <a class="hero-slider__button <?= $attributes['button']['type'] ?>" href="<?= $attributes['button']['target'] ?>">
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
      </div>
    </div>
    <?php if ($attributes['items']) : ?>
      <div class="hero-slider__swiper swiper">
        <div class="hero-slider__list swiper-wrapper">
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="hero-slider__item swiper-slide">
              <?php if ($item['desktop']['url']) : ?>
                <?php if ($item['desktop']['url'] == 'background-1.jpg') : ?>
                  <img class="<?= ($item['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-1.jpg" alt="background" />
                <?php elseif ($item['desktop']['url'] == 'background-2.jpg') : ?>
                  <img class="<?= ($item['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-2.jpg" alt="background" />
                <?php elseif ($item['desktop']['url'] == 'background-3.jpg') : ?>
                  <img class="<?= ($item['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-3.jpg" alt="background" />
                <?php elseif ($item['desktop']['url']) : ?>
                  <img class="<?= ($item['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?= $item['desktop']['url'] ?>" alt="background" />
                <?php endif; ?>
              <?php endif; ?>
              <?php if ($item['mobile']['url']) : ?>
                <?php if ($item['mobile']['url'] == 'background-1-mobile.jpg') : ?>
                  <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-1-mobile.jpg" alt="background" />
                <?php elseif ($item['mobile']['url'] == 'background-2-mobile.jpg') : ?>
                  <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-2-mobile.jpg" alt="background" />
                <?php elseif ($item['mobile']['url'] == 'background-3-mobile.jpg') : ?>
                  <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-3-mobile.jpg" alt="background" />
                <?php elseif ($item['mobile']['url']) : ?>
                  <img class="only-mobile" src="<?= $item['mobile']['url'] ?>" alt="background" />
                <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="hero-slider__dots swiper-pagination"></div>
      </div>
    <?php endif; ?>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    new Swiper(".hero-slider__swiper", {
      slidesPerView: 1,
      autoplayDisableOnInteraction: false,
      spaceBetween: 0,
      effect: 'fade',
      loop: true,
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 10000,
      },
      pagination: {
        el: '.hero-slider__dots',
        clickable: true,
      }
    });
  })
</script>