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
  <div class="calculator" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-currency-usd-rate-buy="<?php the_theme_field('currency_usd_rate_buy', '50'); ?>" data-currency-usd-rate-sell="<?php the_theme_field('currency_usd_rate_sell', '51'); ?>" data-currency-eur-rate-buy="<?php the_theme_field('currency_eur_rate_buy', '60'); ?>" data-currency-eur-rate-sell="<?php the_theme_field('currency_eur_rate_sell', '60'); ?>" data-currency-date="<?php the_theme_field('currency_last_date', '2023-01-01'); ?>">
    <div class="container">
      <div class="calculator__inner">
        <div class="calculator__top">
          <button class="calculator__refresh">
            <div class="calculator__icon">
              <img src="<?php the_block_url(__DIR__); ?>/assets/icon.svg" alt="refresh" />
            </div>
            <?php if ($attributes['title']) : ?>
              <div class="calculator__title"><?= $attributes['title'] ?></div>
            <?php endif; ?>
          </button>
          <?php if ($attributes['description']) : ?>
            <div class="calculator__date">
              <div class="calculator__description"><?= $attributes['description'] ?>: 21.07.2022</div>
            </div>
          <?php endif; ?>
        </div>
        <div class="calculator__content">
          <button class="calculator__currency">
            <div class="calculator__currency-wrapper">
              <input type="checkbox" />
              <div class="calculator__currency-button"></div>
              <div class="calculator__currency-span-1">Dólar (US$)</div>
              <div class="calculator__currency-span-1-mobile">US$</div>
              <div class="calculator__currency-span-2">Euro (EU€)</div>
              <div class="calculator__currency-span-2-mobile">EU€</div>
            </div>
          </button>
          <?php if ($attributes['buy']) : ?>
            <div class="calculator__buy">
              <div class="calculator__buy-span"><?= $attributes['buy'] ?></div>
              <div class="calculator__buy-inputs">
                <div class="calculator__buy-input">
                  <span>US$</span>
                  <input class="input" type="text" placeholder="1" />
                </div>
                <div class="calculator__buy-input">
                  <span>RD$</span>
                  <input class="input" type="text" placeholder="52.50" />
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ($attributes['sell']) : ?>
            <div class="calculator__sell">
              <div class="calculator__sell-span"><?= $attributes['sell'] ?></div>
              <div class="calculator__sell-inputs">
                <div class="calculator__sell-input">
                  <span>US$</span>
                  <input class="input" type="text" placeholder="1" />
                </div>
                <div class="calculator__sell-input">
                  <span>RD$</span>
                  <input class="input" type="text" placeholder="54.00" />
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.calculator').forEach(function(calculator) {
    const refresh = calculator.querySelector('.calculator__refresh')
    const currencyBtn = calculator.querySelector('.calculator__currency')
    const currency = calculator.querySelector('.calculator__currency input')
    const buy = calculator.querySelector('.calculator__buy')
    const buyFrom = buy.querySelector('.calculator__buy-input:first-child input')
    const buyTo = buy.querySelector('.calculator__buy-input:last-child input')
    const sell = calculator.querySelector('.calculator__sell')
    const sellFrom = sell.querySelector('.calculator__sell-input:first-child input')
    const sellTo = sell.querySelector('.calculator__sell-input:last-child input')
    const description = calculator.querySelector('.calculator__description')
    const page = calculator

    const mainCurrency = 'DOP'
    let selectedCurrency = currency.checked ? 'EUR' : 'USD'
    const date = new Date(page.dataset.currencyDate)
    const yyyy = date.getFullYear()
    let mm = date.getMonth() + 1
    let dd = date.getDate()
    if (dd < 10) dd = '0' + dd
    if (mm < 10) mm = '0' + mm
    const formattedToday = dd + '.' + mm + '.' + yyyy
    description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
    buyTo.value =
      Number(page.dataset.currencyUsdRateBuy).toFixed(2).split('.')[1] != '00' ?
      Number(page.dataset.currencyUsdRateBuy).toFixed(2) :
      Number(page.dataset.currencyUsdRateBuy).toFixed(0)
    buyFrom.value = 1.0
    sellTo.value =
      Number(page.dataset.currencyUsdRateSell).toFixed(2).split('.')[1] != '00' ?
      Number(page.dataset.currencyUsdRateSell).toFixed(2) :
      Number(page.dataset.currencyUsdRateSell).toFixed(0)
    sellFrom.value = 1.0

    function buyFromConvert(from = selectedCurrency, to = mainCurrency, amount = '1') {
      if (selectedCurrency == 'EUR') {
        const date = new Date(page.dataset.currencyDate)
        const yyyy = date.getFullYear()
        let mm = date.getMonth() + 1
        let dd = date.getDate()
        if (dd < 10) dd = '0' + dd
        if (mm < 10) mm = '0' + mm
        const formattedToday = dd + '.' + mm + '.' + yyyy
        description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
        buyTo.value =
          Number(page.dataset.currencyEurRateBuy * amount).toFixed(2) != '1.00' ?
          Number(page.dataset.currencyEurRateBuy * amount).toFixed(2) :
          1
      }
      if (selectedCurrency == 'USD') {
        const date = new Date(page.dataset.currencyDate)
        const yyyy = date.getFullYear()
        let mm = date.getMonth() + 1
        let dd = date.getDate()
        if (dd < 10) dd = '0' + dd
        if (mm < 10) mm = '0' + mm
        const formattedToday = dd + '.' + mm + '.' + yyyy
        description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
        buyTo.value =
          Number(page.dataset.currencyUsdRateBuy * amount).toFixed(2) != '1.00' ?
          Number(page.dataset.currencyUsdRateBuy * amount).toFixed(2) :
          1
      }
    }

    function sellFromConvert(from = selectedCurrency, to = mainCurrency, amount = '1') {
      if (selectedCurrency == 'EUR') {
        const date = new Date(page.dataset.currencyDate)
        const yyyy = date.getFullYear()
        let mm = date.getMonth() + 1
        let dd = date.getDate()
        if (dd < 10) dd = '0' + dd
        if (mm < 10) mm = '0' + mm
        const formattedToday = dd + '.' + mm + '.' + yyyy
        description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
        sellTo.value =
          Number(page.dataset.currencyEurRateSell * amount).toFixed(2) != '1.00' ?
          Number(page.dataset.currencyEurRateSell * amount).toFixed(2) :
          1
      }
      if (selectedCurrency == 'USD') {
        const date = new Date(page.dataset.currencyDate)
        const yyyy = date.getFullYear()
        let mm = date.getMonth() + 1
        let dd = date.getDate()
        if (dd < 10) dd = '0' + dd
        if (mm < 10) mm = '0' + mm
        const formattedToday = dd + '.' + mm + '.' + yyyy
        description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
        sellTo.value =
          Number(page.dataset.currencyUsdRateSell * amount).toFixed(2) != '1.00' ?
          Number(page.dataset.currencyUsdRateSell * amount).toFixed(2) :
          1
      }
    }

    function buyToConvert(from = selectedCurrency, to = mainCurrency, amount = '1') {
      if (selectedCurrency == 'EUR') {
        const date = new Date(page.dataset.currencyDate)
        const yyyy = date.getFullYear()
        let mm = date.getMonth() + 1
        let dd = date.getDate()
        if (dd < 10) dd = '0' + dd
        if (mm < 10) mm = '0' + mm
        const formattedToday = dd + '.' + mm + '.' + yyyy
        description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
        buyFrom.value =
          Number(page.dataset.currencyEurRateBuy * amount).toFixed(2) != '1.00' ?
          Number(page.dataset.currencyEurRateBuy * amount).toFixed(2) :
          1
      }
      if (selectedCurrency == 'USD') {
        const date = new Date(page.dataset.currencyDate)
        const yyyy = date.getFullYear()
        let mm = date.getMonth() + 1
        let dd = date.getDate()
        if (dd < 10) dd = '0' + dd
        if (mm < 10) mm = '0' + mm
        const formattedToday = dd + '.' + mm + '.' + yyyy
        description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
        buyFrom.value =
          Number(page.dataset.currencyUsdRateBuy * amount).toFixed(2) != '1.00' ?
          Number(page.dataset.currencyUsdRateBuy * amount).toFixed(2) :
          1
      }
    }

    function sellToConvert(from = selectedCurrency, to = mainCurrency, amount = '1') {
      if (selectedCurrency == 'EUR') {
        const date = new Date(page.dataset.currencyDate)
        const yyyy = date.getFullYear()
        let mm = date.getMonth() + 1
        let dd = date.getDate()
        if (dd < 10) dd = '0' + dd
        if (mm < 10) mm = '0' + mm
        const formattedToday = dd + '.' + mm + '.' + yyyy
        description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
        sellFrom.value =
          Number(page.dataset.currencyEurRateSell * amount).toFixed(2) != '1.00' ?
          Number(page.dataset.currencyEurRateSell * amount).toFixed(2) :
          1
      }
      if (selectedCurrency == 'USD') {
        const date = new Date(page.dataset.currencyDate)
        const yyyy = date.getFullYear()
        let mm = date.getMonth() + 1
        let dd = date.getDate()
        if (dd < 10) dd = '0' + dd
        if (mm < 10) mm = '0' + mm
        const formattedToday = dd + '.' + mm + '.' + yyyy
        description.innerHTML = `${description.innerText.split(':')[0]}: ${formattedToday}`
        sellFrom.value =
          Number(page.dataset.currencyUsdRateSell * amount).toFixed(2) != '1.00' ?
          Number(page.dataset.currencyUsdRateSell * amount).toFixed(2) :
          1
      }
    }

    buyFrom.addEventListener('input', function(event) {
      event.target.value = event.target.value.replace(/\D/g, '')
      buyFromConvert(selectedCurrency, mainCurrency, event.target.value)
    })
    sellFrom.addEventListener('input', function(event) {
      event.target.value = event.target.value.replace(/\D/g, '')
      sellFromConvert(selectedCurrency, mainCurrency, event.target.value)
    })
    buyTo.addEventListener('input', function(event) {
      event.target.value = event.target.value.replace(/\D/g, '')
      buyToConvert(mainCurrency, selectedCurrency, event.target.value)
    })
    sellTo.addEventListener('input', function(event) {
      event.target.value = event.target.value.replace(/\D/g, '')
      sellToConvert(mainCurrency, selectedCurrency, event.target.value)
    })

    currencyBtn.addEventListener('click', function(e) {
      const input = currencyBtn.querySelector('input')
      input.checked = !input.checked
      currencyBtn.classList.toggle('active')
      selectedCurrency = input.checked ? 'EUR' : 'USD'
      const buySpan = buy.querySelector('.calculator__buy-input:first-child span')
      const sellSpan = sell.querySelector('.calculator__sell-input:first-child span')
      buySpan.innerHTML = input.checked ? 'EU€' : 'US$'
      sellSpan.innerHTML = input.checked ? 'EU€' : 'US$'
      buyFromConvert(selectedCurrency, mainCurrency, buyFrom.value)
      sellFromConvert(selectedCurrency, mainCurrency, sellFrom.value)
    })

    refresh.addEventListener('click', async function() {
      buyFromConvert(selectedCurrency, mainCurrency, buyFrom.value)
      sellFromConvert(selectedCurrency, mainCurrency, sellFrom.value)
    })
  })
</script>