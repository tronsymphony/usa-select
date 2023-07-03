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
  <div class="tabs-content" style="
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

      <div class="tabs-content__tabs" data-tabs>
        <div class="tabs-content__triggers" data-triggers>

          <?php if ($attributes['items1'][0]['tabtitle']) : ?>
            <a class="tabs-content__trigger" href="#national-currency-accounts"><?= $attributes['items1'][0]['tabtitle'] ?></a>
          <?php endif; ?>

          <?php 
          if ($attributes['items2'][0]['tabtitle']) : ?>
            <a class="tabs-content__trigger" href="#green-account"><?= $attributes['items2'][0]['tabtitle'] ?></a>
          <?php endif; ?>

          <?php if ($attributes['items3'][0]['tabtitle']) : ?>
            <a class="tabs-content__trigger" href="#pensioners-account"><?= $attributes['items3'][0]['tabtitle'] ?></a>
          <?php endif; ?>

        </div>
       
        <div class="tabs-content__body" data-body>
           <!-- tab -->
          <?php if ($attributes['items1'] && count($attributes['items1']) >= 1) : ?>
            <div class="tabs-content__inner" data-id="#national-currency-accounts">
              <?php if ($attributes['items1'][0]['content']): ?>
                <h2 class="tabs-content__title"><?= $attributes['items1'][0]['content']; ?></h2>
              <?php endif; ?>
              <?php include('feature1.php'); ?>
              <?php include('banner1.php'); ?>
            </div>
          <?php endif; ?>
           <!-- tab -->
          <?php if ($attributes['items2'] && count($attributes['items2']) >= 1) : ?>
            <div class="tabs-content__inner" data-id="#green-account">
            <?php if ($attributes['items2'][0]['content']): ?>
                <h2 class="tabs-content__title"><?= $attributes['items2'][0]['content']; ?></h2>
              <?php endif; ?>
            <?php include('feature2.php'); ?>
              <?php include('banner2.php'); ?>
            </div>
          <?php endif; ?>
           <!-- tab -->
          <?php if ($attributes['items3'] && count($attributes['items3']) >= 1) : ?>
            <div class="tabs-content__inner" data-id="#pensioners-account">
            <?php if ($attributes['items3'][0]['content']): ?>
                <h2 class="tabs-content__title"><?= $attributes['items3'][0]['content']; ?></h2>
              <?php endif; ?>
            <?php include('feature3.php'); ?>
              <?php include('banner3.php'); ?>
            </div>
          <?php endif; ?>
           <!-- tab -->
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.tabs-content').forEach(function(accordions) {
    accordions.querySelectorAll('.tabs-content__item').forEach(function(accordion) {
      const triger = accordion.querySelector('.tabs-content__item-header')
      const content = accordion.querySelector('.tabs-content__item-body')
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