<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

$id = uniqid();

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="suggested" style="
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
      <?php if ($attributes['items']) : ?>
        <div class="suggested__inner">
          <div class="suggested__swiper suggested__swiper--<?=$id ?> swiper">
            <div class="suggested__list swiper-wrapper">
              <?php foreach ($attributes['items'] as $item) : ?>
                <div class="suggested__item swiper-slide">
                  <?php if ($item['title']) : ?>
                    <h3 class="suggested__item-title">
                      <?= $item['title'] ?>
                    </h3>
                  <?php endif; ?>
                  <?php if ($item['button']['desktop'] || $item['button']['mobile'] || $item['primaryButton']['desktop'] || $item['primaryButton']['mobile']) : ?>
                    <div class="suggested__item-bottom">
                      <?php if ($item['button']['desktop'] || $item['button']['mobile']) : ?>
                        <a class="suggested__item-link <?= $item['button']['type'] ?>" href="<?= $item['button']['target'] ?>">
                          <?php if ($item['button']['desktop']) : ?>
                            <span class="<?= ($item['primaryButton']['mobile']) ? 'only-desktop' : '' ?>"><?= $item['button']['desktop'] ?></span>
                          <?php endif; ?>
                          <?php if ($item['button']['mobile']) : ?>
                            <span class="only-mobile"><?= $item['button']['mobile'] ?></span>
                          <?php endif; ?>
                        </a>
                      <?php endif; ?>
                      <?php if ($item['primaryButton']['desktop'] || $item['primaryButton']['mobile']) : ?>
                        <a class="suggested__item-button <?= $item['primaryButton']['type'] ?>" href="<?= $item['primaryButton']['target'] ?>">
                          <?php if ($item['primaryButton']['desktop']) : ?>
                            <span class="<?= ($item['primaryButton']['mobile']) ? 'only-desktop' : '' ?>"><?= $item['primaryButton']['desktop'] ?></span>
                          <?php endif; ?>
                          <?php if ($item['primaryButton']['mobile']) : ?>
                            <span class="only-mobile"><?= $item['primaryButton']['mobile'] ?></span>
                          <?php endif; ?>
                        </a>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php if ($attributes['items'] && count($attributes['items']) > 3) : ?>
            <div class="suggested__swiper-arrows">
              <button class="suggested__swiper-arrow suggested__swiper-<?=$id ?>-arrow--left suggested__swiper-arrow--left">
                <img src="<?php the_block_url(__DIR__); ?>/assets/arrow-left.svg" alt="">
              </button>
              <button class="suggested__swiper-arrow suggested__swiper-<?=$id ?>-arrow--right suggested__swiper-arrow--right">
                <img src="<?php the_block_url(__DIR__); ?>/assets/arrow-right.svg" alt="">
              </button>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    new Swiper(".suggested__swiper--<?=$id ?>", {
      slidesPerView: 1.1,
      spaceBetween: 16,
      freeMode: true,
      allowTouchMove: true,
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 24,
          freeMode: false,
          allowTouchMove: false,
        },
      },
      navigation: {
        prevEl: ".suggested__swiper-<?=$id ?>-arrow--left",
        nextEl: ".suggested__swiper-<?=$id ?>-arrow--right",
      },
    });
  })
</script>