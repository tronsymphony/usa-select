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
  <div class="advantages" style="
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
        <div class="advantages__inner">
          <div class="advantages__grid">
            <?php foreach ($attributes['items'] as $item) : ?>
              <a class="advantages__item" href="<?= $item['link'] ?>" style="background: <?= $item['color'] ?>">
                <div class="advantages__item-image">
                  <?php if ($item['image']['url'] == '1.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/1.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == '2.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/2.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == '3.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/3.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == '4.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/4.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == '5.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/5.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == '6.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/6.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == '7.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/7.svg" alt="icon" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="icon" />
                  <?php endif; ?>
                </div>
                <?php if ($item['title']) : ?>
                  <div class="advantages__item-title"><?= $item['title'] ?></div>
                <?php endif; ?>
              </a>
            <?php endforeach; ?>
          </div>
          <div class="advantages__swiper swiper">
            <div class="advantages__list swiper-wrapper">
              <?php foreach ($attributes['items'] as $item) : ?>
                <a class="advantages__item swiper-slide" href="<?= $item['link'] ?>" style="background: <?= $item['color'] ?>">
                  <div class="advantages__item-image">
                    <?php if ($item['image']['url'] == '1.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/1.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == '2.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/2.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == '3.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/3.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == '4.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/4.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == '5.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/5.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == '6.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/6.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == '7.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/7.svg" alt="icon" />
                    <?php elseif ($item['image']['url']) : ?>
                      <img src="<?= $item['image']['url'] ?>" alt="icon" />
                    <?php endif; ?>
                  </div>
                  <?php if ($item['title']) : ?>
                    <div class="advantages__item-title"><?= $item['title'] ?></div>
                  <?php endif; ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    const mediaQuery = window.matchMedia('(max-width: 1199.98px)')

    function handleTabletChange(e) {
      if (e.matches) {
        new Swiper(".advantages__swiper", {
          slidesPerView: 1.1,
          spaceBetween: 16,
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
          },
        });
      }
    }

    mediaQuery.addListener(handleTabletChange)

    handleTabletChange(mediaQuery)
  });
</script>