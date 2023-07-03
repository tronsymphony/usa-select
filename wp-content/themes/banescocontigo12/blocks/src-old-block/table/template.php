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
  <div class="table" style="
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
      <div class="table__inner" data-tabs>
        <?php if ($attributes['items']) : ?>
          <div class="table__filters" data-triggers>
            <?php foreach ($attributes['items'] as $item) : ?>
              <a class="table__filter" href="#<?= $item['id'] ?>">
                <?= $item['title'] ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="table__content" data-body>
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="table__table" data-id="#<?= $item['id'] ?>">
              <?= $item['html'] ?>
            </div>
          <?php endforeach; ?>
          <?php if ($attributes['info']) : ?>
            <div class="table__info"><?= $attributes['info'] ?></div>
          <?php endif; ?>
        </div>
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