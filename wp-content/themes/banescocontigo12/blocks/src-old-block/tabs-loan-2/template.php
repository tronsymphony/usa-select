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
  <div class="tabs-loan tabs-loan--2" style="
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
      <div class="tabs-loan__wrapper" data-tabs>
        <div class="tabs-loan__tabs" data-triggers>
          <a class="tabs-loan__tab disabled" href="#línea-paralela">Hipotecarios</a>
          <a class="tabs-loan__tab" href="#personales">Personales</a>
          <a class="tabs-loan__tab disabled" href="#comerciales">Vehículos</a>
          <a class="tabs-loan__tab disabled" href="#agropecuarios">Verdes</a>
        </div>
        <div class="tabs-loan__body" data-body>
          <div class="tabs-loan__content" data-id="#línea-paralela">

          </div>
          <div class="tabs-loan__content" data-id="#personales">
            <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
              <h2 class="tabs-loan__title">
                <?php if ($attributes['title']['desktop']) : ?>
                  <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
                <?php endif; ?>
                <?php if ($attributes['title']['mobile']) : ?>
                  <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
                <?php endif; ?>
              </h2>
            <?php endif; ?>
            <div class="tabs-loan__line">
              <div class="tabs-loan__item tabs-loan__item--slider">
                <h3 class="tabs-loan__item-title">
                  <?php if ($attributes['slider2']['title']['desktop']) : ?>
                    <span class="<?= ($attributes['slider2']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['slider2']['title']['desktop'] ?></span>
                  <?php endif; ?>
                  <?php if ($attributes['slider2']['title']['mobile']) : ?>
                    <span class="only-mobile"><?= $attributes['slider2']['title']['mobile'] ?></span>
                  <?php endif; ?>
                </h3>
                <div class="tabs-loan_slider rd-slider" data-min="0" data-max="150000" data-set="50000" data-step="1000" data-set="50000">
                  <button class="rd-slider__button rd-slider__button--min">min</button>
                  <div class="rd-slider__content"></div>
                  <button class="rd-slider__button rd-slider__button--max">max</button>
                </div>
              </div>
              <div class="tabs-loan__item tabs-loan__item--counter">
                <h3 class="tabs-loan__item-title">
                  <?php if ($attributes['counter2']['title']['desktop']) : ?>
                    <span class="<?= ($attributes['counter2']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['counter2']['title']['desktop'] ?></span>
                  <?php endif; ?>
                  <?php if ($attributes['counter2']['title']['mobile']) : ?>
                    <span class="only-mobile"><?= $attributes['counter2']['title']['mobile'] ?></span>
                  <?php endif; ?>
                </h3>
                <div class="tabs-loan__counter counter" data-min="1" data-max="12" data-set="1">
                  <input type="number" hidden>
                  <button class="counter__button counter__button--minus"></button>
                  <div class="counter__content">0</div>
                  <button class="counter__button counter__button--plus"></button>
                </div>
              </div>

              <div class="tabs-loan__item">
                <div class="tabs-loan__buttons">
                  <button class="tabs-loan__button primary-button button2">
                    <?php if ($attributes['button']['title']['desktop']) : ?>
                      <span class="<?= ($attributes['button']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['button']['title']['desktop'] ?></span>
                    <?php endif; ?>
                    <?php if ($attributes['button']['title']['mobile']) : ?>
                      <span class="only-mobile"><?= $attributes['button']['title']['mobile'] ?></span>
                    <?php endif; ?>
                  </button>
                </div>
              </div>

            </div>
            <div class="tabs-loan__hidden2">
              <div class="tabs-loan__block">
                <div class="tabs-loan__block-first">
                  <span>Tu cuota mensual será de:</span>
                  <span>RD$ 926.35 | Tasa anual: 20%</span>
                </div>
              </div>
              <div class="tabs-loan__info">
                <div class="tabs-loan__info-inner">El presente simulador de préstamos es una herramienta orientativa que proporciona un resultado según información proporcionada por el interesado que no fue constatada formalmente por Banesco, sin haber realizado la respectiva evaluación de crédito, por lo que no constituye una oferta, obligación o compromiso alguno por parte del Banco para su otorgamiento.</div>
                <div class="tabs-loan__grey-buttons">
                  <button class="button tabs-loan__grey-button button3">Nuestra recomendación para ti
                    <img src="<?php the_block_url(__DIR__); ?>/assets/arrow.svg">
                  </button>
                </div>
              </div>
              <div class="tabs-loan__post">
                <div class="tabs-loan__post-inner">
                  <div class="tabs-loan__post-image">
                    <img src="<?php the_block_url(__DIR__); ?>/assets/image.jpg">
                  </div>
                  <div class="tabs-loan__post-content">
                    <div class="tabs-loan__post-title">Préstamo Personal</div>
                    <div class="tabs-loan__post-text">Con nuestros préstamos personales podrás consolidar deudas, disfrutar de viajes, compras, remodelación de tu hogar, invertir en salud y otras opciones con las mejores condiciones de financiamiento.
                    </div>
                    <div class="tabs-loan__post-buttons">
                      <div class="tabs-loan__post-button primary-button button3">Me interesa</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tabs-loan__content" data-id="#comerciales">

          </div>
          <div class="tabs-loan__content" data-id="#vivienda">

          </div>
          <div class="tabs-loan__content" data-id="#agropecuarios">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.tabs-loan').forEach(function(calculator) {
    const currencyBtn = calculator.querySelector('.tabs-loan__currency')

    currencyBtn && currencyBtn.addEventListener('click', function(e) {
      const input = currencyBtn.querySelector('input')
      input.checked = !input.checked
      currencyBtn.classList.toggle('active')
    })
  })

  document.querySelectorAll('.tabs-loan').forEach(function(calculator) {
    const currencyBtn = calculator.querySelector('.tabs-loan__currency2')

    currencyBtn && currencyBtn.addEventListener('click', function(e) {
      const input = currencyBtn.querySelector('input')
      input.checked = !input.checked
      currencyBtn.classList.toggle('active')
    })
  })

  document.querySelectorAll('.tabs-loan').forEach(function(calculator) {
    const currencyBtn = calculator.querySelector('.button1')

    currencyBtn && currencyBtn.addEventListener('click', function(e) {
      document.querySelector('.tabs-loan__hidden').classList.toggle('active')
    })
  })

  document.querySelectorAll('.tabs-loan').forEach(function(calculator) {
    const currencyBtn = calculator.querySelector('.button2')

    currencyBtn && currencyBtn.addEventListener('click', function(e) {
      document.querySelector('.tabs-loan__hidden2').classList.toggle('active')
    })
  })

  document.querySelectorAll('.tabs-loan').forEach(function(calculator) {
    const currencyBtn = calculator.querySelector('.button3')


    currencyBtn && currencyBtn.addEventListener('click', function(e) {
      currencyBtn.classList.toggle('active')
      document.querySelector('.tabs-loan__post').classList.toggle('active')
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
        this.$triggers[1].classList.add('active');
        this.$body[1].classList.add('active');
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