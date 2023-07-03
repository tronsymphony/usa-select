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
  <div class="calculator-loan" style="
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
      <div class="calculator-loan__inner">
        <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
          <h2 class="calculator-loan__title">
            <?php if ($attributes['title']['desktop']) : ?>
              <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
            <?php endif; ?>
            <?php if ($attributes['title']['mobile']) : ?>
              <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
            <?php endif; ?>
          </h2>
        <?php endif; ?>
        <div class="calculator-loan__line">
          <div class="calculator-loan__item calculator-loan__item--slider">
            <?php if ($attributes['slider']['title']['desktop'] || $attributes['slider']['title']['mobile']) : ?>
              <h3 class="calculator-loan__item-title">
                <?php if ($attributes['slider']['title']['desktop']) : ?>
                  <span class="<?= ($attributes['slider']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['slider']['title']['desktop'] ?></span>
                <?php endif; ?>
                <?php if ($attributes['slider']['title']['mobile']) : ?>
                  <span class="only-mobile"><?= $attributes['slider']['title']['mobile'] ?></span>
                <?php endif; ?>
              </h3>
            <?php endif; ?>
            <div class="calculator-loan__slider rd-slider" data-min="0" data-max="150000" data-set="50000" data-step="1000" data-set="50000">
              <button class="rd-slider__button rd-slider__button--min">min</button>
              <div class="rd-slider__content"></div>
              <button class="rd-slider__button rd-slider__button--max">max</button>
            </div>
          </div>
          <div class="calculator-loan__item calculator-loan__item--counter">
            <?php if ($attributes['counter']['title']['desktop'] || $attributes['counter']['title']['mobile']) : ?>
              <h3 class="calculator-loan__item-title">
                <?php if ($attributes['counter']['title']['desktop']) : ?>
                  <span class="<?= ($attributes['counter']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['counter']['title']['desktop'] ?></span>
                <?php endif; ?>
                <?php if ($attributes['counter']['title']['mobile']) : ?>
                  <span class="only-mobile"><?= $attributes['counter']['title']['mobile'] ?></span>
                <?php endif; ?>
              </h3>
            <?php endif; ?>
            <div class="calculator-loan__counter counter" data-min="1" data-max="12" data-set="<?= $attributes['counter']['count'] ? $attributes['counter']['count'] : '1' ?>">
              <input type="number" hidden>
              <button class="counter__button counter__button--minus"></button>
              <div class="counter__content">0</div>
              <button class="counter__button counter__button--plus"></button>
            </div>
          </div>
          <div class="calculator-loan__item">
            <div class="calculator-loan__buttons">
              <?php if ($attributes['button']['title']['desktop'] || $attributes['button']['title']['mobile']) : ?>
                <a class="calculator-loan__button primary-button" href="<?= $attributes['button']['target'] ?>">
                  <?php if ($attributes['button']['title']['desktop']) : ?>
                    <span class="<?= ($attributes['button']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['button']['title']['desktop'] ?></span>
                  <?php endif; ?>
                  <?php if ($attributes['button']['title']['mobile']) : ?>
                    <span class="only-mobile"><?= $attributes['button']['title']['mobile'] ?></span>
                  <?php endif; ?>
                </a>
              <?php endif; ?>
              <?php if ($attributes['outlinedButton']['title']['desktop'] || $attributes['outlinedButton']['title']['mobile']) : ?>
                <a class="calculator-loan__button outlined-button button2" href="<?= $attributes['outlinedButton']['target'] ?>">
                  <?php if ($attributes['outlinedButton']['title']['desktop']) : ?>
                    <span class="<?= ($attributes['outlinedButton']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['outlinedButton']['title']['desktop'] ?></span>
                  <?php endif; ?>
                  <?php if ($attributes['outlinedButton']['title']['mobile']) : ?>
                    <span class="only-mobile"><?= $attributes['outlinedButton']['title']['mobile'] ?></span>
                  <?php endif; ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php if ($attributes['extra']['title'] || $attributes['extra']['price'] || $attributes['extra']['info'] || $attributes['extra']['button']) : ?>
          <div class="calculator-loan__extra">
            <div class="calculator-loan__hidden">
              <div class="calculator-loan__block">
                <div class="calculator-loan__block-first">
                  <span><?= $attributes['extra']['title'] ?></span>
                  <span><?= $attributes['extra']['price'] ?></span>
                </div>
              </div>
              <div class="calculator-loan__info">
                <div class="calculator-loan_info-inner"><?= $attributes['extra']['info'] ?></div>
              </div>
            </div>
            <div class="calculator-loan__grey-buttons">
              <button class="button calculator-loan__grey-button button1">
                <img src="<?php the_block_url(__DIR__); ?>/assets/arrow-2.svg">
                <?= $attributes['extra']['button'] ?>
              </button>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.calculator-loan').forEach(function(calculator) {
    const currencyBtn = calculator.querySelector('.button1')
    const currencyBtn2 = calculator.querySelector('.button2')
    const slider = calculator.querySelector('.rd-slider__content')

    currencyBtn.addEventListener('click', function(e) {
      document.querySelector('.calculator-loan__hidden').classList.toggle('active')
      currencyBtn.classList.toggle('active')
    })

    currencyBtn2.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelector('.counter__content').innerHTML = '1';
      console.log(slider);
      slider.noUiSlider.set(10000);
      document.querySelector('.calculator-loan__extra').style.display = 'none';
    })
  })
</script>