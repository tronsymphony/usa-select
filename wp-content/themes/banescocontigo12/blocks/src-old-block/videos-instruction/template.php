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
  <div class="videos-instruction" style="
      --paddings-top: <?= (isset($attributes['paddings']['desktop']['top'])) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= (isset($attributes['paddings']['mobile']['top'])) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= (isset($attributes['paddings']['desktop']['bottom'])) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= (isset($attributes['paddings']['mobile']['bottom'])) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= (isset($attributes['margins']['desktop']['top'])) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= (isset($attributes['margins']['mobile']['top'])) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= (isset($attributes['margins']['desktop']['bottom'])) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= (isset($attributes['margins']['mobile']['bottom'])) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= (isset($attributes['gradient'])) ? $attributes['gradient'] : '#fff' ?>;
    ">
    <div class="container">
      <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
        <h2 class="videos-instruction__title">
          <?php if ($attributes['title']['desktop']) : ?>
            <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
          <?php endif; ?>
          <?php if ($attributes['title']['mobile']) : ?>
            <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
          <?php endif; ?>
        </h2>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="videos-instruction__inner">
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="videos-instruction__item">
              <?php if ($item['title']) : ?>
                <h3 class="videos-instruction__item-title">
                  <?= $item['title'] ?>
                </h3>
              <?php endif; ?>
              <div class="videos-instruction__item-video">
                <?php if ($item['iframe']) : ?>
                  <iframe class="videos-instruction__item-iframe" src="<?= $item['iframe'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                  </iframe>
                <?php endif; ?>
                <?php if ($item['image']['url']) : ?>
                  <div class="videos-instruction__item-image">
                    <?php if ($item['image']['url'] == 'video-1.jpg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/video-1.jpg" alt="video" />
                    <?php elseif ($item['image']['url'] == 'video-2.jpg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/video-2.jpg" alt="video" />
                    <?php elseif ($item['image']['url']) : ?>
                      <img src="<?= $item['image']['url'] ?>" alt="video" />
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              </div>
              <?php if ($item['button']) : ?>
                <a class="videos-instruction__item-button primary-button" href="<?= $item['link'] ?>">
                  <?= $item['button'] ?>
                </a>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.videos-instruction__item-video').forEach(function(video) {
    const image = video.querySelector('.videos-instruction__item-image')
    const iframe = video.querySelector('.videos-instruction__item-iframe')

    image && iframe &&
      image.addEventListener('click', function() {
        video.classList.add('active');
        iframe.src = iframe.src += '?autoplay=1';
      })
  });
</script>