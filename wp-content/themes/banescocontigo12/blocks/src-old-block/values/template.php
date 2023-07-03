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
  <div class="values" style="
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
      <div class="values__inner">
        <?php if ($attributes['title']) : ?>
          <div class="values__title">Nuestros valores
          </div>
        <?php endif; ?>
        <?php if ($attributes['items']) : ?>
          <div class="values__swiper swiper">
            <div class="values__list swiper-wrapper">
              <?php foreach ($attributes['items'] as $item) : ?>
                <div class="values__item swiper-slide" style="--item-color: <?= $item['color'] ?>">
                  <?php if ($item['title']) : ?>
                    <div class="values__item-title"><?= $item['title'] ?></div>
                  <?php endif; ?>
                  <?php if ($item['text']) : ?>
                    <div class="values__item-text"><?= $item['text'] ?></div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    new Swiper(".values__swiper", {
      slidesPerView: 1.1,
      spaceBetween: 24,
      allowTouchMove: true,
      mousewheel: true,
      freeMode: {
        enabled: true,
        sticky: true,
      },
      breakpoints: {
        576: {
          slidesPerView: 1.8,
        },
        768: {
          slidesPerView: 2.2,
        },
        992: {
          slidesPerView: 3.3
        },
        1200: {
          slidesPerView: 4,
          allowTouchMove: false,
          mousewheel: false,
          freeMode: false,
        },
      },
    });
  })
</script>