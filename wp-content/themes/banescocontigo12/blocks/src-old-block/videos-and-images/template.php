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
  <div class="videos-and-images" style="
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
        <h2 class="videos-and-images__title">
          <?php if ($attributes['title']['desktop']) : ?>
            <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
          <?php endif; ?>
          <?php if ($attributes['title']['mobile']) : ?>
            <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
          <?php endif; ?>
        </h2>
      <?php endif; ?>
      <div class="videos-and-images__wrapper" data-tabs>
        <div class="videos-and-images__tabs" data-triggers>
          <?php if ($attributes['videos'] && count($attributes['videos']) > 1 && ($attributes['videosTitle'] || $attributes['videosIcon']['url'])) : ?>
            <a class="videos-and-images__tab" href="#videos">
              <?php if ($attributes['videosIcon']['url']) : ?>
                <?php if ($attributes['videosIcon']['url'] == 'videos.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/videos.svg" alt="icon" />
                <?php elseif ($attributes['videosIcon']['url'] == 'images.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/images.svg" alt="icon" />
                <?php elseif ($attributes['videosIcon']['url'] == 'audios.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/audios.svg" alt="icon" />
                <?php elseif ($attributes['videosIcon']['url']) : ?>
                  <img src="<?= $attributes['videosIcon']['url'] ?>" alt="icon" />
                <?php endif; ?>
              <?php endif; ?>
              <?php if ($attributes['videosTitle']) : ?>
                <span><?= $attributes['videosTitle'] ?></span>
              <?php endif; ?>
            </a>
          <?php endif; ?>
          <?php if ($attributes['images'] && count($attributes['images']) > 1 && ($attributes['imagesTitle'] || $attributes['imagesIcon']['url'])) : ?>
            <a class="videos-and-images__tab" href="#images">
              <?php if ($attributes['imagesIcon']['url']) : ?>
                <?php if ($attributes['imagesIcon']['url'] == 'videos.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/videos.svg" alt="icon" />
                <?php elseif ($attributes['imagesIcon']['url'] == 'images.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/images.svg" alt="icon" />
                <?php elseif ($attributes['imagesIcon']['url'] == 'audios.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/audios.svg" alt="icon" />
                <?php elseif ($attributes['imagesIcon']['url']) : ?>
                  <img src="<?= $attributes['imagesIcon']['url'] ?>" alt="icon" />
                <?php endif; ?>
              <?php endif; ?>
              <?php if ($attributes['imagesTitle']) : ?>
                <span><?= $attributes['imagesTitle'] ?></span>
              <?php endif; ?>
            </a>
          <?php endif; ?>
          <?php if ($attributes['audios'] && count($attributes['audios']) > 1 && ($attributes['audiosTitle'] || $attributes['audiosIcon']['url'])) : ?>
            <a class="videos-and-images__tab" href="#audios">
              <?php if ($attributes['audiosIcon']['url']) : ?>
                <?php if ($attributes['audiosIcon']['url'] == 'videos.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/videos.svg" alt="icon" />
                <?php elseif ($attributes['audiosIcon']['url'] == 'images.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/images.svg" alt="icon" />
                <?php elseif ($attributes['audiosIcon']['url'] == 'audios.svg') : ?>
                  <img src="<?php the_block_url(__DIR__); ?>/assets/audios.svg" alt="icon" />
                <?php elseif ($attributes['audiosIcon']['url']) : ?>
                  <img src="<?= $attributes['audiosIcon']['url'] ?>" alt="icon" />
                <?php endif; ?>
              <?php endif; ?>
              <?php if ($attributes['audiosTitle']) : ?>
                <span><?= $attributes['audiosTitle'] ?></span>
              <?php endif; ?>
            </a>
          <?php endif; ?>
        </div>
        <div class="videos-and-images__body" data-body>
          <?php if ($attributes['videos'] && count($attributes['videos']) > 1) : ?>
            <div class="videos-and-images__inner videos-and-images__inner--videos" data-id="#videos">
              <?php foreach ($attributes['videos'] as $item) : ?>
                <div class="videos-and-images__item" style="
              --max-lines: <?= ($item['maxLines']) ? $item['maxLines'] : '1' ?>;
            ">
                  <?php if ($item['image']['url']) : ?>
                    <a class="videos-and-images__item-image" href="<?= $item['link'] ?>">
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
                    <h3 class="videos-and-images__item-title">
                      <?= $item['title'] ?>
                    </h3>
                  <?php endif; ?>
                  <?php if ($item['text']) : ?>
                    <div class="videos-and-images__item-text">
                      <?= $item['text'] ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['images'] && count($attributes['images']) > 1) : ?>
            <div class="videos-and-images__inner videos-and-images__inner--images" data-id="#images">
              <?php foreach ($attributes['images'] as $item) : ?>
                <div class="videos-and-images__item" style="
              --max-lines: <?= ($item['maxLines']) ? $item['maxLines'] : '1' ?>;
            ">
                  <?php if ($item['image']['url']) : ?>
                    <a class="videos-and-images__item-image" href="<?= $item['link'] ?>">
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
                    <h3 class="videos-and-images__item-title">
                      <?= $item['title'] ?>
                    </h3>
                  <?php endif; ?>
                  <?php if ($item['text']) : ?>
                    <div class="videos-and-images__item-text">
                      <?= $item['text'] ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['audios'] && count($attributes['audios']) > 1) : ?>
            <div class="videos-and-images__inner videos-and-images__inner--audios" data-id="#audios">
              <?php foreach ($attributes['audios'] as $item) : ?>
                <div class="videos-and-images__item" style="
              --max-lines: <?= ($item['maxLines']) ? $item['maxLines'] : '1' ?>;
            ">
                  <?php if ($item['image']['url']) : ?>
                    <a class="videos-and-images__item-image" href="<?= $item['link'] ?>">
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
                    <h3 class="videos-and-images__item-title">
                      <?= $item['title'] ?>
                    </h3>
                  <?php endif; ?>
                  <?php if ($item['text']) : ?>
                    <div class="videos-and-images__item-text">
                      <?= $item['text'] ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($attributes['link']['enable']) : ?>
        <a class="videos-and-images__link" href="<?= $attributes['link']['target'] ?>">
          <?php if ($attributes['link']['image']['url']) : ?>
            <div class="videos-and-images__link-image">
              <?php if ($attributes['link']['image']['url'] == 'youtube.svg') : ?>
                <img src="<?php the_block_url(__DIR__); ?>/assets/youtube.svg" alt="link" />
              <?php elseif ($attributes['link']['image']['url']) : ?>
                <img src="<?= $attributes['link']['image']['url'] ?>" alt="link" />
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['link']['title']['desktop'] || $attributes['link']['title']['mobile']) : ?>
            <h4 class="videos-and-images__link-title link-button">
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

<script>
  new class Tabs {

    constructor() {
      this.$wrapper;
      this.$triggers;
      this.$body;
      this.init();
    }

    init() {
      document.querySelectorAll('[data-tabs]').forEach((wrapper) => {
        this.$wrapper = wrapper;
        this.$triggers = [...wrapper.querySelector('[data-triggers]').children];
        this.$body = [...wrapper.querySelector('[data-body]').children];
        this.$triggers[0].classList.add('active');
        this.$body[0].classList.add('active');
        this.update();
        this.addListenerClick();
        this.addListenerHash();
      });
    }

    update(event) {
      const trigger = this.$wrapper.querySelector(`a[href="${window.location.hash}"]`);
      const content = this.$wrapper.querySelector(`[data-id="${window.location.hash}"]`);

      if (window.location.hash && trigger && content) {

        this.$triggers.forEach((trigger) => {
          trigger.classList.remove('active');
        });

        this.$body.forEach((content) => {
          content.classList.remove('active');
        });

        trigger.classList.add('active');
        content.classList.add('active');
      }

      sessionStorage.setItem("last-url", event?.oldURL);
    }

    addListenerClick() {
      this.$triggers.forEach(trigger => {
        trigger.addEventListener('click', this.changeTab.bind(this));
      });
    }

    addListenerHash() {
      window.addEventListener('hashchange', this.update.bind(this));
    }

    changeTab(event) {
      event.preventDefault();

      const trigger = event.target.closest('a[href^="#"]');
      const content = this.$wrapper.querySelector(`[data-id="${trigger.hash}"]`);

      this.$triggers.forEach(trigger => {
        trigger.classList.remove('active');
      });

      this.$body.forEach(content => {
        content.classList.remove('active');
      });

      trigger.classList.add('active');
      content.classList.add('active');

      history.replaceState(undefined, undefined, trigger.hash)
    }
  };
</script>