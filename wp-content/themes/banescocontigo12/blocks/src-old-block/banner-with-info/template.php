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
  <div class="banner-with-info" style="
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
        <h2 class="banner-with-info__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>

      <?php if ($attributes['bannerTitle'] || $attributes['bannerContent']) : ?>
      <div class="banner-with-info__inner">
        <div class="banner-with-info__content">
          <div class="banner-with-info__content-top">

            <?php if ($attributes['bannerIcon']['url']) : ?>
              <div class="banner-with-info__content-icon">
                <?php if ($attributes['bannerIcon']['url'] == 'icon.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/icon.svg" alt="icon" />
                <?php elseif ($attributes['bannerIcon']['url']) : ?>
                  <img src="<?= $attributes['bannerIcon']['url'] ?>" alt="icon" />
                <?php endif; ?>
              </div>
            <?php endif; ?>

            <?php if ($attributes['bannerTitle'] || $attributes['bannerSubtitle']) : ?>
              <div class="banner-with-info__content-titles">
                <?php if ($attributes['bannerTitle']) : ?>
                  <h3 class="banner-with-info__content-title"><?= $attributes['bannerTitle'] ?></h3>
                <?php endif; ?>
                <?php if ($attributes['bannerSubtitle']) : ?>
                  <h4 class="banner-with-info__content-subtitle"><?= $attributes['bannerSubtitle'] ?></h4>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
          <?php if ($attributes['bannerContent']) : ?>
            <div class="banner-with-info__content-body"><?= $attributes['bannerContent'] ?></div>
          <?php endif; ?>
          <?php if ($attributes['button']) : ?>
            <div class="banner-with-info__content-footer">
              <a class="banner-with-info__content-button primary-button" href="<?= $attributes['target'] ?>">
                <?= $attributes['button'] ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
        <?php if ($attributes['background']['url'] || $attributes['mBackground']['url']) : ?>
          <div class="banner-with-info__background">
            <?php if ($attributes['background']['url']) : ?>
              <?php if ($attributes['background']['url'] == 'background.jpg') : ?>
                <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : ''; ?>" src="<?php the_block_url(__DIR__); ?>/assets/background.jpg" alt="background" />
              <?php elseif ($attributes['background']['url']) : ?>
                <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : ''; ?>" src="<?= $attributes['background']['url'] ?>" alt="background" />
              <?php endif; ?>
            <?php endif; ?>
            <?php if ($attributes['mBackground']['url']) : ?>
              <?php if ($attributes['mBackground']['url'] == 'background-mobile.jpg') : ?>
                <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-mobile.jpg" alt="background" />
              <?php elseif ($attributes['mBackground']['url']) : ?>
                <img class="only-mobile" src="<?= $attributes['mBackground']['url'] ?>" alt="background" />
              <?php endif; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <?php if ($attributes['extraText']) : ?>
        <div class="banner-with-info__extra-text">
          <?= $attributes['extraText'] ?>
        </div>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="banner-with-info__items" style="<?= ($attributes['itemsInLine']) ? "justify-content: flex-start" : "" ?>">
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="banner-with-info__item" style="<?= ($attributes['itemsInLine']) ? "margin-right: 70px" : "" ?>">
              
              <?php if ($item['image']['url']) : ?>
                <div class="banner-with-info__item-image">
                  <?php if ($item['image']['url'] == 'pin.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/pin.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == 'mail.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/mail.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == 'tel.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/tel.svg" alt="icon" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="icon" />
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              
              <?php if ($item['title'] || $item['link']) : ?>
                <div class="banner-with-info__item-content">
                  <?php if ($item['title']) : ?>
                    <h3 class="banner-with-info__item-title"><?= $item['title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($item['link']) : ?>
                    <a class="banner-with-info__item-link link-button" href="<?= $item['target'] ?>"><?= $item['link'] ?></a>
                  <?php endif; ?>
                  <?php if ($item['text']) : ?>
                    <div class="banner-with-info__item-text text"><?= $item['text'] ?></div>
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