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
  <div class="contact" style="
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
      <?php if ($attributes['title']) : ?>
        <h2 class="contact__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="contact__inner">
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="contact__item">
              <?php if ($item['image']['url']) : ?>
                <div class="contact__item-image">
                  <?php if ($item['image']['url'] == 'tel.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/tel.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == 'mail.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/mail.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == 'marker.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/marker.svg" alt="icon" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="icon" />
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($item['title'] || $item['description']) : ?>
                <div class="contact-form__item-text">
                  <?php if ($item['title']) : ?>
                    <h3 class="contact-form__item-title"><?= $item['title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($item['description']) : ?>
                  <div class="contact-form__item-content">
                    <a class="contact-form__item-line" href="<?= $item['link'] ?>">
                      <?= $item['description'] ?>
                    </a>
                  </div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>