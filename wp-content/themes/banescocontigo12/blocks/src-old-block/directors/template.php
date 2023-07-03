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
  <div class="directors" style="
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
      <div class="directors__inner">
        <?php if ($attributes['title']) : ?>
          <h2 class="directors__title"><?= $attributes['title'] ?></h2>
        <?php endif; ?>
        <?php if ($attributes['items']) : ?>
          <div class="directors__grid">
            <?php foreach ($attributes['items'] as $item) : ?>
              <div class="directors__item">
                <?php if ($item['image']['url']) : ?>
                  <div class="directors__item-image">
                    <?php if ($item['image']['url'] == 'avatar.png') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/avatar.png" alt="avatar" />
                    <?php elseif ($item['image']['url']) : ?>
                      <img src="<?= $item['image']['url'] ?>" alt="avatar" />
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($item['title']) : ?>
                  <h3 class="directors__item-title"><?= $item['title'] ?></h3>
                <?php endif; ?>
                <?php if ($item['text']) : ?>
                  <h4 class="directors__item-text"><?= $item['text'] ?></h4>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <?php if ($attributes['items']) : ?>
          <div class="directors__swiper swiper">
            <div class="directors__list swiper-wrapper">
              <?php foreach ($attributes['items'] as $item) : ?>
                <div class="directors__item swiper-slide">
                  <?php if ($item['image']['url']) : ?>
                    <div class="directors__item-image">
                      <?php if ($item['image']['url'] == 'avatar.png') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/avatar.png" alt="avatar" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="avatar" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <?php if ($item['title']) : ?>
                    <h3 class="directors__item-title"><?= $item['title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($item['text']) : ?>
                    <h4 class="directors__item-text"><?= $item['text'] ?></h4>
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
    const mediaQuery = window.matchMedia('(max-width: 1199.98px)')

    function handleTabletChange(e) {
      if (e.matches) {
        new Swiper(".directors__swiper", {
          slidesPerView: 1.4,
          spaceBetween: 16,
          allowTouchMove: true,
          mousewheel: true,
          freeMode: {
            enabled: true,
            sticky: true,
          },
          breakpoints: {
            576: {
              slidesPerView: 2.4,
            },
            768: {
              slidesPerView: 3.4,
              spaceBetween: 24,
            },
            992: {
              slidesPerView: 3.5
            },
          },
        });
      }
    }

    mediaQuery.addListener(handleTabletChange)

    handleTabletChange(mediaQuery)
  });
</script>