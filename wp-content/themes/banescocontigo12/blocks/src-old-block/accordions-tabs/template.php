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
  <div class="accordions-tabs" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-columns="<?= ($attributes['columns']) ? $attributes['columns'] : '1' ?>">
    <div class="container">
      <?php if ($attributes['title']) : ?>
        <h2 class="accordions-tabs__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <div class="accordions-tabs__tabs" data-tabs>
        <div class="accordions-tabs__triggers" data-triggers>
          <?php if ($attributes['title1']) : ?>
            <a class="accordions-tabs__trigger" href="#national-currency-accounts"><?= $attributes['title1'] ?></a>
          <?php endif; ?>
          <?php if ($attributes['title2']) : ?>
            <a class="accordions-tabs__trigger" href="#green-account"><?= $attributes['title2'] ?></a>
          <?php endif; ?>
          <?php if ($attributes['title3']) : ?>
            <a class="accordions-tabs__trigger" href="#pensioners-account"><?= $attributes['title3'] ?></a>
          <?php endif; ?>
        </div>
        <div class="accordions-tabs__body" data-body>
          <?php if ($attributes['items1'] && count($attributes['items1']) > 1) : ?>
            <div class="accordions-tabs__inner" data-id="#national-currency-accounts">
              <?php if ($attributes['columns'] == "1") : ?>
                <?php foreach ($attributes['items1'] as $item) : ?>
                  <div class="accordions-tabs__item">
                    <div class="accordions-tabs__item-header">
                      <?php if ($item['title']) : ?>
                        <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                      <?php endif; ?>
                    </div>
                    <div class="accordions-tabs__item-body">
                      <div class="accordions-tabs__item-body-inner">
                        <?php if ($item['iframe']) : ?>
                          <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                        <?php endif; ?>
                        <?php if ($item['content']) : ?>
                          <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if ($attributes['columns'] == "2") : ?>
                <div class="accordions-tabs__column">
                  <?php foreach ($attributes['items1'] as $key => $item) : ?>
                    <?php if ($key % 2 == 0) : ?>
                      <div class="accordions-tabs__item">
                        <div class="accordions-tabs__item-header">
                          <?php if ($item['title']) : ?>
                            <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                        </div>
                        <div class="accordions-tabs__item-body">
                          <div class="accordions-tabs__item-body-inner">
                            <?php if ($item['iframe'] && $item['iframe']) : ?>
                              <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                            <?php endif; ?>
                            <?php if ($item['content'] && $item['content']) : ?>
                              <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="accordions-tabs__column">
                  <?php foreach ($attributes['items1'] as $key => $item) : ?>
                    <?php if ($key % 2 != 0) : ?>
                      <div class="accordions-tabs__item">
                        <div class="accordions-tabs__item-header">
                          <?php if ($item['title'] && $item['title']) : ?>
                            <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                        </div>
                        <div class="accordions-tabs__item-body">
                          <div class="accordions-tabs__item-body-inner">
                            <?php if ($item['iframe'] && $item['iframe']) : ?>
                              <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                            <?php endif; ?>
                            <?php if ($item['content'] && $item['content']) : ?>
                              <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items2'] && count($attributes['items2']) > 1) : ?>
            <div class="accordions-tabs__inner" data-id="#green-account">
              <?php if ($attributes['columns'] == "1") : ?>
                <?php foreach ($attributes['items2'] as $item) : ?>
                  <div class="accordions-tabs__item">
                    <div class="accordions-tabs__item-header">
                      <?php if ($item['title']) : ?>
                        <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                      <?php endif; ?>
                    </div>
                    <div class="accordions-tabs__item-body">
                      <div class="accordions-tabs__item-body-inner">
                        <?php if ($item['iframe']) : ?>
                          <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                        <?php endif; ?>
                        <?php if ($item['content']) : ?>
                          <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if ($attributes['columns'] == "2") : ?>
                <div class="accordions-tabs__column">
                  <?php foreach ($attributes['items2'] as $key => $item) : ?>
                    <?php if ($key % 2 == 0) : ?>
                      <div class="accordions-tabs__item">
                        <div class="accordions-tabs__item-header">
                          <?php if ($item['title']) : ?>
                            <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                        </div>
                        <div class="accordions-tabs__item-body">
                          <div class="accordions-tabs__item-body-inner">
                            <?php if ($item['iframe'] && $item['iframe']) : ?>
                              <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                            <?php endif; ?>
                            <?php if ($item['content'] && $item['content']) : ?>
                              <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="accordions-tabs__column">
                  <?php foreach ($attributes['items2'] as $key => $item) : ?>
                    <?php if ($key % 2 != 0) : ?>
                      <div class="accordions-tabs__item">
                        <div class="accordions-tabs__item-header">
                          <?php if ($item['title'] && $item['title']) : ?>
                            <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                        </div>
                        <div class="accordions-tabs__item-body">
                          <div class="accordions-tabs__item-body-inner">
                            <?php if ($item['iframe'] && $item['iframe']) : ?>
                              <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                            <?php endif; ?>
                            <?php if ($item['content'] && $item['content']) : ?>
                              <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['items3'] && count($attributes['items3']) > 1) : ?>
            <div class="accordions-tabs__inner" data-id="#pensioners-account">
              <?php if ($attributes['columns'] == "1") : ?>
                <?php foreach ($attributes['items3'] as $item) : ?>
                  <div class="accordions-tabs__item">
                    <div class="accordions-tabs__item-header">
                      <?php if ($item['title']) : ?>
                        <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                      <?php endif; ?>
                    </div>
                    <div class="accordions-tabs__item-body">
                      <div class="accordions-tabs__item-body-inner">
                        <?php if ($item['iframe']) : ?>
                          <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                        <?php endif; ?>
                        <?php if ($item['content']) : ?>
                          <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if ($attributes['columns'] == "2") : ?>
                <div class="accordions-tabs__column">
                  <?php foreach ($attributes['items3'] as $key => $item) : ?>
                    <?php if ($key % 2 == 0) : ?>
                      <div class="accordions-tabs__item">
                        <div class="accordions-tabs__item-header">
                          <?php if ($item['title']) : ?>
                            <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                        </div>
                        <div class="accordions-tabs__item-body">
                          <div class="accordions-tabs__item-body-inner">
                            <?php if ($item['iframe'] && $item['iframe']) : ?>
                              <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                            <?php endif; ?>
                            <?php if ($item['content'] && $item['content']) : ?>
                              <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <div class="accordions-tabs__column">
                  <?php foreach ($attributes['items3'] as $key => $item) : ?>
                    <?php if ($key % 2 != 0) : ?>
                      <div class="accordions-tabs__item">
                        <div class="accordions-tabs__item-header">
                          <?php if ($item['title'] && $item['title']) : ?>
                            <h3 class="accordions-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                        </div>
                        <div class="accordions-tabs__item-body">
                          <div class="accordions-tabs__item-body-inner">
                            <?php if ($item['iframe'] && $item['iframe']) : ?>
                              <iframe class="accordions-tabs__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                            <?php endif; ?>
                            <?php if ($item['content'] && $item['content']) : ?>
                              <div class="accordions-tabs__item-content text"><?= $item['content'] ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.accordions-tabs').forEach(function(accordions) {
    accordions.querySelectorAll('.accordions-tabs__item').forEach(function(accordion) {
      const triger = accordion.querySelector('.accordions-tabs__item-header')
      const content = accordion.querySelector('.accordions-tabs__item-body')
      triger.addEventListener('click', function() {
        accordion.classList.toggle('active')
      })
    })
  })
</script>

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