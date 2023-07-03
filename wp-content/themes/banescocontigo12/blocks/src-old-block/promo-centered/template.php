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
  <div class="promo-centered" style="
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
      <div class="promo-centered__inner">
        <div class="promo-centered__content">
          
        <div class="promo-centered__icon">
          <svg width="60" height="59" viewBox="0 0 60 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28.4948 43.8577H31.7419V26.0452H28.4948V43.8577ZM29.9996 21.375C30.5278 21.375 30.9895 21.1901 31.3847 20.8202C31.7812 20.4516 31.9794 19.9766 31.9794 19.3952C31.9794 18.7619 31.7945 18.2609 31.4246 17.8923C31.0547 17.5224 30.5797 17.3375 29.9996 17.3375C29.3663 17.3375 28.878 17.5224 28.5347 17.8923C28.1914 18.2609 28.0198 18.7359 28.0198 19.3173C28.0198 19.8974 28.2047 20.3851 28.5746 20.7803C28.9445 21.1768 29.4195 21.375 29.9996 21.375ZM29.9996 58.425C25.9361 58.425 22.1361 57.6599 18.5996 56.1298C15.0631 54.5984 11.9756 52.5135 9.33711 49.875C6.69864 47.2365 4.61371 44.149 3.08231 40.6125C1.55218 37.076 0.787109 33.276 0.787109 29.2125C0.787109 25.149 1.55218 21.349 3.08231 17.8125C4.61371 14.276 6.71194 11.1752 9.37701 8.5101C12.0421 5.84503 15.1296 3.7601 18.6395 2.2553C22.1494 0.751766 25.9361 0 29.9996 0C34.0111 0 37.8111 0.751766 41.3996 2.2553C44.9881 3.7601 48.1022 5.83173 50.7419 8.4702C53.3804 11.1099 55.452 14.2107 56.9568 17.7726C58.4603 21.3357 59.2121 25.149 59.2121 29.2125C59.2121 33.276 58.4603 37.0627 56.9568 40.5726C55.452 44.0825 53.3804 47.1567 50.7419 49.7952C48.1022 52.4349 45.0014 54.5332 41.4395 56.0899C37.8764 57.6466 34.0631 58.425 29.9996 58.425ZM29.9996 55.1798C37.2297 55.1798 43.3655 52.6598 48.4068 47.6197C53.4469 42.5784 55.9669 36.4426 55.9669 29.2125C55.9669 21.9824 53.4469 15.8473 48.4068 10.8072C43.3655 5.76587 37.2297 3.2452 29.9996 3.2452C22.7695 3.2452 16.6337 5.76587 11.5924 10.8072C6.55234 15.8473 4.03231 21.9824 4.03231 29.2125C4.03231 36.4426 6.55234 42.5784 11.5924 47.6197C16.6337 52.6598 22.7695 55.1798 29.9996 55.1798Z" fill="white"/>
          </svg>
        </div>
          <?php if ($attributes['title']) : ?>
            <h2 class="promo-centered__title"><?= $attributes['title'] ?></h2>
          <?php endif; ?>
          <?php if ($attributes['description']) : ?>
            <h3 class="promo-centered__description"><?= $attributes['description'] ?></h3>
          <?php endif; ?>
          <?php if ($attributes['button']) : ?>
            <div class="promo-centered__buttons">
              <a class="promo-centered__button white-button" href="<?= $attributes['target'] ?>">
                <?= $attributes['button'] ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>