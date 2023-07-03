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
  <div class="contact-form" style="
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
      <div class="contact-form__inner">

        <div class="contact-form__items">
          <?php if ($attributes['title']) : ?>
            <h2 class="contact-form__title"><?= $attributes['title'] ?></h2>
          <?php endif; ?>
          <?php if ($attributes['content']) : ?>
            <div class="contact-form__content text"><?= $attributes['content'] ?></div>
          <?php endif; ?>
          <?php if ($attributes['items']) : ?>
            <?php foreach ($attributes['items'] as $item) : ?>
              <div class="contact-form__item">
                <?php if ($item['icon']['desktop']['url'] || $item['icon']['mobile']['url']) : ?>
                  <div class="contact-form__item-image">
                    <?php if ($item['icon']['desktop']['url']) : ?>
                      <?php if ($item['icon']['desktop']['url'] == 'tel.svg') : ?>
                        <img class="<?= ($item['icon']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/tel.svg" alt="image" />
                      <?php elseif ($item['icon']['desktop']['url'] == 'mail.svg') : ?>
                        <img class="<?= ($item['icon']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/mail.svg" alt="image" />
                      <?php elseif ($item['icon']['desktop']['url'] == 'whatsapp.png') : ?>
                        <img class="<?= ($item['icon']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/whatsapp.png" alt="image" />
                      <?php elseif ($item['icon']['desktop']['url']) : ?>
                        <img class="<?= ($item['icon']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?= $item['icon']['desktop']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($item['icon']['mobile']['url']) : ?>
                      <?php if ($item['icon']['mobile']['url'] == 'tel.svg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-1-mobile.png" alt="image" />
                      <?php elseif ($item['icon']['mobile']['url'] == 'image-2-mobile.png') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-2-mobile.png" alt="image" />
                      <?php elseif ($item['icon']['mobile']['url'] == 'image-2-mobile.png') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/image-2-mobile.png" alt="image" />
                      <?php elseif ($item['icon']['mobile']['url']) : ?>
                        <img class="only-mobile" src="<?= $item['icon']['mobile']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($item['title'] || $item['firstLine']['desktop'] || $item['firstLine']['mobile'] || $item['secondLine']['desktop'] || $item['secondLine']['mobile']) : ?>
                  <div class="contact-form__item-text">
                    <?php if ($item['title']) : ?>
                      <h3 class="contact-form__item-title"><?= $item['title'] ?></h3>
                    <?php endif; ?>
                    <?php if ($item['firstLine']['desktop'] || $item['firstLine']['mobile'] || $item['secondLine']['desktop'] || $item['secondLine']['mobile']) : ?>
                      <div class="contact-form__item-content">
                        <?php if ($item['firstLine']['desktop'] || $item['firstLine']['mobile']) : ?>
                          <a class="contact-form__item-line link-button" href="<?= $item['firstLine']['target'] ?>">
                            <?php if ($item['firstLine']['desktop']) : ?>
                              <span class="<?= ($item['firstLine']['mobile']) ? 'only-desktop' : ''; ?>"><?= $item['firstLine']['desktop'] ?></span>
                            <?php endif; ?>
                            <?php if ($item['firstLine']['mobile']) : ?>
                              <span class="only-mobile"><?= $item['firstLine']['mobile'] ?></span>
                            <?php endif; ?>
                          </a>
                        <?php endif; ?>
                        <?php if ($item['secondLine']['desktop'] || $item['secondLine']['mobile']) : ?>
                          <a class="contact-form__item-line link-button" href="<?= $item['secondLine']['target'] ?>">
                            <?php if ($item['secondLine']['desktop']) : ?>
                              <span class="<?= ($item['secondLine']['mobile']) ? 'only-desktop' : ''; ?>"><?= $item['secondLine']['desktop'] ?></span>
                            <?php endif; ?>
                            <?php if ($item['secondLine']['mobile']) : ?>
                              <span class="only-mobile"><?= $item['secondLine']['mobile'] ?></span>
                            <?php endif; ?>
                          </a>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <?php if (shortcode_exists('gravityform')) : ?>
          <div class="contact-form__content">
            <div><?php echo do_shortcode($attributes['form']); ?></div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>