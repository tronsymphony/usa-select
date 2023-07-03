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
  <div class="hero-background" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --margins-title: <?= ($attributes['margins']['desktop']['title']) ? $attributes['margins']['desktop']['title'] : '0px' ?>;
      --margins-title--mobile: <?= ($attributes['margins']['mobile']['title']) ? $attributes['margins']['mobile']['title'] : '0px' ?>;
      --margins-description: <?= ($attributes['margins']['desktop']['description']) ? $attributes['margins']['desktop']['description'] : '0px' ?>;
      --margins-description--mobile: <?= ($attributes['margins']['mobile']['description']) ? $attributes['margins']['mobile']['description'] : '0px' ?>;
      --margins-button: <?= ($attributes['margins']['desktop']['button']) ? $attributes['margins']['desktop']['button'] : '0px' ?>;
      --margins-button--mobile: <?= ($attributes['margins']['mobile']['button']) ? $attributes['margins']['mobile']['button'] : '0px' ?>;
      --colors-title: <?= ($attributes['colors']['title']) ? $attributes['colors']['title'] : '#fff' ?>;
      --colors-description: <?= ($attributes['colors']['description']) ? $attributes['colors']['description'] : '#fff' ?>;
      --widths-title: <?= ($attributes['widths']['desktop']['title']) ? $attributes['widths']['desktop']['title'] : 'auto' ?>;
      --widths-title--mobile: <?= ($attributes['widths']['mobile']['title']) ? $attributes['widths']['mobile']['title'] : 'auto' ?>;
      --widths-description: <?= ($attributes['widths']['desktop']['description']) ? $attributes['widths']['desktop']['description'] : 'auto' ?>;
      --widths-description--mobile: <?= ($attributes['widths']['mobile']['description']) ? $attributes['widths']['mobile']['description'] : 'auto' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-big-text="<?= ($attributes['bigText']) ? "true" : "false" ?>">
    <div class="container">
      <div class="hero-background__inner">
        <div class="hero-background__content">

          <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
            <h2 class="hero-background__title">
              <?php if ($attributes['title']['desktop']) : ?>
                <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['title']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
              <?php endif; ?>
            </h2>
          <?php endif; ?>

          <?php if ($attributes['description']['desktop'] || $attributes['description']['mobile']) : ?>
            <div class="hero-background__description text">
              <?php if ($attributes['description']['desktop']) : ?>
                <span class="<?= ($attributes['description']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['description']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['description']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['description']['mobile'] ?></span>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['button']['desktop'] || $attributes['button']['mobile']) : ?>
            <div class="hero-background__buttons">
              <a class="hero-background__button <?= $attributes['button']['type'] ?>" href="<?= $attributes['button']['target'] ?>" <?php if ($attributes['button']['target'][0] == '#') : ?>data-sidebar-open<?php endif; ?>>
                <?php if ($attributes['button']['desktop']) : ?>
                  <span class="<?= ($attributes['button']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['button']['desktop'] ?></span>
                <?php endif; ?>
                <?php if ($attributes['button']['mobile']) : ?>
                  <span class="only-mobile"><?= $attributes['button']['mobile'] ?></span>
                <?php endif; ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php if ($attributes['background']['desktop']['url'] || $attributes['background']['mobile']['url']) : ?>
        <div class="hero-background__background">
          <?php if ($attributes['background']['desktop']['url']) : ?>

          <?php 
          $extension = pathinfo($attributes['background']['desktop']['url'], PATHINFO_EXTENSION);
          ?>
            <?php if($extension == 'mp4'): ?>
              <video class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" autoplay loop muted preload src="<?php echo $attributes['background']['desktop']['url']; ?>"></video>  
            <?php else:  ?>
              <?php if ($attributes['background']['desktop']['url'] == 'background-0.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-0.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-1.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-1.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-2.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-2.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-3.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-3.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-4.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-4.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-5.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-5.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-6.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-6.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-7.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-7.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-8.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-8.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-9.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-9.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url'] == 'background-10.jpg') : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-10.jpg" alt="background" />
              <?php elseif ($attributes['background']['desktop']['url']) : ?>
                <img class="<?= ($attributes['background']['mobile']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['background']['desktop']['url'] ?>" alt="background" />
              <?php endif; ?>
            <?php endif; ?>

          <?php endif; ?>


          <?php if ($attributes['background']['mobile']['url']) : ?>


          <?php 
          $extensionMobile = pathinfo($attributes['background']['mobile']['url'], PATHINFO_EXTENSION);
          ?>
          <?php if($extensionMobile == 'mp4'): ?>
              <video class="only-mobile" autoplay loop muted preload src="<?php echo $attributes['background']['mobile']['url']; ?>"></video>  
            <?php else:  ?>

            <?php if ($attributes['background']['mobile']['url'] == 'background-0-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-0-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-1-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-1-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-2-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-2-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-3-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-3-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-4-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-4-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-5-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-5-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-6-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-6-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-7-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-7-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-8-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-8-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-9-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-9-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url'] == 'background-10-mobile.jpg') : ?>
              <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-10-mobile.jpg" alt="background" />
            <?php elseif ($attributes['background']['mobile']['url']) : ?>
              <img class="only-mobile" src="<?= $attributes['background']['mobile']['url'] ?>" alt="background" />
            <?php endif; ?>
          <?php endif; ?>

          <?php endif; ?>

        </div>
      <?php endif; ?>
    </div>
  </div>
</section>