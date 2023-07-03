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
  <div class="qr-code-blocks" style="
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

      <div class="qr-code-blocks__inner">
        <div class="qr-code-blocks__left">
          <div class="qr-code-blocks__item">
          <div class="qr-code-blocks__item__images">
              <?php $item = $attributes['items'][0]; ?>
              <?php if ($item['image']['url']) : ?>
              <div class="qr-code-blocks__item__images-image">
                <?php if ($item['image']['url']) : ?>
                    <img class="" src="<?= $item['image']['url'] ?>" alt="image" />
                <?php endif; ?>
              </div>
              <?php endif; ?>
              
              <?php if ($attributes['items'][0]['target']) : ?>
                <div class="qr-code-blocks__item-links">
                  <a class="qr-code-blocks__item-link-button" href="<?= $attributes['items'][0]['target'] ?>">
                  <img src='<?php the_block_url(__DIR__); ?>/assets/appstore.png'  />
                  </a>
                </div>
              <?php endif; ?>
              
            </div>
            <div class="qr-code-blocks__item-content">
              <?php if ($attributes['items'][0]['description']) : ?>
                <h2 class="qr-code-blocks__item-description"><?= $attributes['items'][0]['description'] ?></h2>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <div class="qr-code-blocks__right">
          <div class="qr-code-blocks__item">
                <div class="qr-code-blocks__item__images">
                <?php $item = $attributes['items'][1]; ?>
            <?php if ($item['image']['url']) : ?>
              <div class="qr-code-blocks__item__images-image">
                <?php if ($item['image']['url']) : ?>
                    <img class="" src="<?= $item['image']['url'] ?>" alt="image" />
                <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['items'][1]['target']) : ?>
                <div class="qr-code-blocks__item-links">
                  <a class="qr-code-blocks__item-link-button" href="<?= $attributes['items'][1]['target'] ?>">
                      <img src='<?php the_block_url(__DIR__); ?>/assets/googleplay.png'  />
                    </a>
                </div>
              <?php endif; ?>
                </div>
            <div class="qr-code-blocks__item-content">
              
              <?php if ($attributes['items'][1]['description']) : ?>
                <h2 class="qr-code-blocks__item-description"><?= $attributes['items'][1]['description'] ?></h2>
              <?php endif; ?>
              
             
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>