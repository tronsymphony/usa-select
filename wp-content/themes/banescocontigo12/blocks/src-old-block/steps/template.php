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
  <div class="steps" style="
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
      <div class="steps__inner">
        <?php if ($attributes['title']) : ?>
          <h2 class="steps__title"><?= $attributes['title'] ?></h2>
        <?php endif; ?>
        <?php if ($attributes['items']) : ?>
          <div class="steps__list">
            <?php foreach ($attributes['items'] as $item) : ?>
              <div class="steps__item">
                <?php if ($item['suptitle']) : ?>
                  <div class="steps__item-suptitle">
                    <?= $item['suptitle'] ?>
                  </div>
                <?php endif; ?>
                <?php if ($item['title']) : ?>
                  <div class="steps__item-title">
                    <?= $item['title'] ?>
                  </div>
                <?php endif; ?>
                <?php if ($item['text']) : ?>
                  <div class="steps__item-text">
                    <?= $item['text'] ?>
                  </div>
                <?php endif; ?>
                <?php if ($item['first_link_title'] || $item['second_link_title']) : ?>
                  <div class="steps__item-links">
                    <?php if ($item['first_link_title']) : ?>
                      <a class="steps__item-link link-button" href="<?= $item['first_link_value'] ?>">
                        <?= $item['first_link_title'] ?>
                      </a>
                    <?php endif; ?>
                    <?php if ($item['second_link_title']) : ?>
                      <a class="steps__item-link link-button" href="<?= $item['second_link_value'] ?>">
                        <?= $item['second_link_title'] ?>
                      </a>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($item['appstore'] || $item['googleplay']) : ?>
                  <div class="steps__item-buttons">
                    <?php if ($item['appstore']) : ?>
                      <a class="steps__item-appstore" href="<?= $item['appstore'] ?>">
                        <img src="<?php the_block_url(__DIR__); ?>/assets/appstore.png" />
                      </a>
                    <?php endif; ?>
                    <?php if ($item['googleplay']) : ?>
                      <a class="steps__item-googleplay" href="<?= $item['googleplay'] ?>">
                        <img src="<?php the_block_url(__DIR__); ?>/assets/googleplay.png" />
                      </a>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php if ($attributes['background']['desktop']['url'] || $attributes['background']['mobile']['url']) : ?>
      <div class="steps__background">
        <?php if ($attributes['background']['desktop']['url']) : ?>
          <?php if ($attributes['background']['desktop']['url'] == 'background.jpg') : ?>
            <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background.jpg" alt="background" />
          <?php elseif ($attributes['background']['desktop']['url']) : ?>
            <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['background']['desktop']['url'] ?>" alt="background" />
          <?php endif; ?>
        <?php endif; ?>
        <?php if ($attributes['background']['mobile']['url']) : ?>
          <?php if ($attributes['background']['mobile']['url'] == 'background.jpg') : ?>
            <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background.jpg" alt="background" />
          <?php elseif ($attributes['background']['mobile']['url']) : ?>
            <img class="only-mobile" src="<?= $attributes['background']['mobile']['url'] ?>" alt="background" />
          <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>