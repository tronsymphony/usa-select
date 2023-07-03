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
  <div class="videos" style="
      --paddings-top: <?= (isset($attributes['paddings']['desktop']['top'])) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= (isset($attributes['paddings']['mobile']['top'])) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= (isset($attributes['paddings']['desktop']['bottom'])) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= (isset($attributes['paddings']['mobile']['bottom'])) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= (isset($attributes['margins']['desktop']['top'])) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= (isset($attributes['margins']['mobile']['top'])) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= (isset($attributes['margins']['desktop']['bottom'])) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= (isset($attributes['margins']['mobile']['bottom'])) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= (isset($attributes['gradient'])) ? $attributes['gradient'] : '#fff' ?>;
    " data-mobile-font-size-increase="<?= ($attributes['title']['mIncrease']) ? "true" : 'false' ?>">
    <div class="container">
      <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
        <h2 class="videos__title">
          <?php if ($attributes['title']['desktop']) : ?>
            <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
          <?php endif; ?>
          <?php if ($attributes['title']['mobile']) : ?>
            <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
          <?php endif; ?>
        </h2>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="videos__inner">
          <?php $module_count=0; foreach ($attributes['items'] as $item) : ?>
            <div class="videos__item" style="
              --max-lines: <?= ($item['maxLines']) ? $item['maxLines'] : '1' ?>;
            ">
              

              <?php if ($item['image']['url']) : ?>

                  <?php if ($item['module_title']) : ?>
                    <a href="#" class="link-module" data-video_module="<?= $module_count; ?>">
                  <?php else: ?>
                    <a class="videos__item-image" href="<?= $item['link']; ?>">
                  <?php endif; ?>

                  <?php if ($item['image']['url'] == 'video-1.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-1.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-2.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-2.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-3.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-3.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-4.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-4.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-5.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-5.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-6.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-6.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-7.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-7.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-8.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-8.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-9.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-9.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-10.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-10.jpg" alt="video" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="video" />
                  <?php endif; ?>
                </a>
              <?php endif; ?>
              <?php if ($item['title']) : ?>
                <h3 class="videos__item-title">
                  <?= $item['title'] ?>
                </h3>
              <?php endif; ?>
              <?php if ($item['text']) : ?>
                <div class="videos__item-text">
                  <?= $item['text'] ?>
                </div>
              <?php endif; ?>
            </div>
          <?php $module_count++; endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if ($attributes['link']['enable']) : ?>

      
                            
        <a class="videos__link" target="_blank" href="<?= $attributes['link']['target'] ?>">
          <?php if ($attributes['link']['image']['url']) : ?>
            <div class="videos__link-image">
              <?php if ($attributes['link']['image']['url'] == 'youtube.svg') : ?>
                <img src="<?php the_block_url(__DIR__); ?>/assets/youtube.svg" alt="link" />
              <?php elseif ($attributes['link']['image']['url']) : ?>
                <img src="<?= $attributes['link']['image']['url'] ?>" alt="link" />
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['link']['title']['desktop'] || $attributes['link']['title']['mobile']) : ?>
            <h4 class="videos__link-title link-button">
              <?php if ($attributes['link']['title']['desktop']) : ?>
                <span class="<?= ($attributes['link']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['link']['title']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['link']['title']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['link']['title']['mobile'] ?></span>
              <?php endif; ?>
            </h4>
          <?php endif; ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>




<?php if ($attributes['items']) : ?>
  <?php $module_count=0; foreach ($attributes['items'] as $item) : ?>
    <?php if ($item['title'] || $item['description']) : ?>
            <div class="video__modal--content" data-video-module-popup="<?= $module_count; ?>">
                <h2 class="video__modal--content-title"><?= $item['module_title']; ?></h2>
                <?php if (!empty($item['link'])): ?>

                  <?php 
                  preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $item['link'], $match);
                  $youtube_id = $match[1];
                  ?>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $youtube_id; ?>?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  
                  <?php endif; ?>

                <span class="video__modal--close">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.1159 9.22559L18.5659 3.10827C18.8483 2.83976 19.007 2.47558 19.007 2.09585C19.007 1.71611 18.8483 1.35193 18.5659 1.08342C18.2834 0.814911 17.9003 0.664062 17.5009 0.664062C17.1014 0.664062 16.7183 0.814911 16.4359 1.08342L10.0009 7.215L3.56589 1.08342C3.28343 0.814911 2.90034 0.664062 2.50089 0.664062C2.10143 0.664063 1.71834 0.814911 1.43588 1.08342C1.15343 1.35193 0.994747 1.71611 0.994747 2.09585C0.994747 2.47558 1.15343 2.83976 1.43588 3.10827L7.88589 9.22559L1.43588 15.3429C1.29529 15.4755 1.1837 15.6332 1.10755 15.8069C1.0314 15.9807 0.992188 16.1671 0.992188 16.3553C0.992188 16.5436 1.0314 16.73 1.10755 16.9037C1.1837 17.0775 1.29529 17.2352 1.43588 17.3678C1.57533 17.5014 1.74123 17.6075 1.92402 17.6799C2.10681 17.7523 2.30287 17.7895 2.50089 17.7895C2.6989 17.7895 2.89496 17.7523 3.07775 17.6799C3.26054 17.6075 3.42644 17.5014 3.56589 17.3678L10.0009 11.2362L16.4359 17.3678C16.5753 17.5014 16.7412 17.6075 16.924 17.6799C17.1068 17.7523 17.3029 17.7895 17.5009 17.7895C17.6989 17.7895 17.895 17.7523 18.0778 17.6799C18.2605 17.6075 18.4264 17.5014 18.5659 17.3678C18.7065 17.2352 18.8181 17.0775 18.8942 16.9037C18.9704 16.73 19.0096 16.5436 19.0096 16.3553C19.0096 16.1671 18.9704 15.9807 18.8942 15.8069C18.8181 15.6332 18.7065 15.4755 18.5659 15.3429L12.1159 9.22559Z"
                            fill="#708090" />
                    </svg>
                </span>
            </div>
      <?php endif; ?>
  <?php $module_count++; endforeach; ?>
  <div class="video__modal--content-overlay"></div>
<?php endif; ?>

<script>
    document.querySelectorAll('.link-module').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault()
            console.log(item.dataset)
            console.log(document.querySelector('[data-video-module-popup="'+item.dataset.video_module+'"]'))

            document.querySelector('[data-video-module-popup="'+item.dataset.video_module+'"]').classList.add('active-modal')
            document.querySelector('.video__modal--content-overlay').classList.add('active-modal')
                
        })
    })
    document.querySelectorAll('.video__modal--close').forEach(function(item) {
      item.addEventListener('click', function(e) {
        
        document.querySelectorAll('.video__modal--content').forEach(function(item) {
          item.classList.remove('active-modal')
        })
        document.querySelector('.video__modal--content-overlay').classList.remove('active-modal')
      })
    })

</script>