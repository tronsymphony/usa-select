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
  <div class="collections" style="
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
      <div class="collections__tabs" data-tabs>
        <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
          <h2 class="collections__title">
            <?php if ($attributes['title']['desktop']) : ?>
              <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
            <?php endif; ?>
            <?php if ($attributes['title']['mobile']) : ?>
              <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
            <?php endif; ?>
          </h2>
        <?php endif; ?>
        <div class="collections__triggers" data-triggers>
          <a class="collections__tab" href="#patrimonio">Patrimonio</a>
          <a class="collections__tab" href="#palabras-para-venezuela">Palabras para Venezuela</a>
          <a class="collections__tab" href="#periodismo">Periodismo</a>
          <a class="collections__tab" href="#gente-que-hace-escuela">Gente que hace Escuela</a>
          <a class="collections__tab" href="#el-pais-y-su-gente">El País y su gente</a>
          <a class="collections__tab" href="#los-rostros-del-futuro">Los rostros del futuro</a>
          <a class="collections__tab" href="#patrocinio">Patrocinio</a>
          <a class="collections__tab" href="#no-es-cuento-es-historia">No es cuento, es historia</a>
          <a class="collections__tab" href="#upunnose-auyepu">ÜPÜNNOSE AUYEPÜ</a>
        </div>
        <?php if ($attributes['content']['desktop'] || $attributes['content']['mobile']) : ?>
          <div class="collections__content text">
            <?php if ($attributes['content']['desktop']) : ?>
              <div class="<?= ($attributes['content']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['content']['desktop'] ?></div>
            <?php endif; ?>
            <?php if ($attributes['content']['mobile']) : ?>
              <div class="only-mobile"><?= $attributes['content']['mobile'] ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <div class="collections__body" data-body>
          <?php if ($attributes['items1'] && count($attributes['items1']) > 1) : ?>
            <div class="collections__inner" data-id="#patrimonio">
              <?php foreach ($attributes['items1'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items2'] && count($attributes['items2']) > 1) : ?>
            <div class="collections__inner" data-id="#palabras-para-venezuela">
              <?php foreach ($attributes['items2'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items3'] && count($attributes['items3']) > 1) : ?>
            <div class="collections__inner" data-id="#periodismo">
              <?php foreach ($attributes['items3'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items4'] && count($attributes['items4']) > 1) : ?>
            <div class="collections__inner" data-id="#gente-que-hace-escuela">
              <?php foreach ($attributes['items4'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items5'] && count($attributes['items5']) > 1) : ?>
            <div class="collections__inner" data-id="#el-pais-y-su-gente">
              <?php foreach ($attributes['items5'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items6'] && count($attributes['items6']) > 1) : ?>
            <div class="collections__inner" data-id="#los-rostros-del-futuro">
              <?php foreach ($attributes['items6'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items7'] && count($attributes['items7']) > 1) : ?>
            <div class="collections__inner" data-id="#patrocinio">
              <?php foreach ($attributes['items7'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items8'] && count($attributes['items8']) > 1) : ?>
            <div class="collections__inner" data-id="#no-es-cuento-es-historia">
              <?php foreach ($attributes['items8'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items9'] && count($attributes['items9']) > 1) : ?>
            <div class="collections__inner" data-id="#upunnose-auyepu">
              <?php foreach ($attributes['items9'] as $item) : ?>
                <a class="collections__item" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url']) : ?>
                    <div class="collections__item-image">
                      <?php if ($item['image']['url'] == 'image-1.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-1.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-2.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-2.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-3.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-3.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-4.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-4.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-5.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-5.jpg" alt="image" />
                      <?php elseif ($item['image']['url'] == 'image-6.jpg') : ?>
                        <img src="<?php the_block_url(__DIR__); ?>/assets/image-6.jpg" alt="image" />
                      <?php elseif ($item['image']['url']) : ?>
                        <img src="<?= $item['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="collections__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="collections__item-title">
                        <?= $item['title'] ?>
                      </h3>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="collections__pagination">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $args = array(
            'post_type' => 'post',
            'paged' => $paged,
          );
         
          $query = new WP_Query($args);
          custom_pagination($query, 3) ?>
        </div>
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