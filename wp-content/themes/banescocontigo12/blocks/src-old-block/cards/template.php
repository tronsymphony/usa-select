<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="cards" style="
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
    <div class="cards__hero">
      <div class="container">
        <div class="cards__hero-inner">
          <div class="cards__hero-text">Conoce todas nuestras tarjetas</div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cards__content">
        <div class="cards__filters">
          <div class="cards__filters-title">Me gustaría:</div>
          <div class="cards__filters-content">
            <div class="cards__filter cards__filter--checkboxes" tabindex="-1">
              <div class="cards__filter-header">
                <span>Beneficios</span>
              </div>
              <div class="cards__filter-dropdown">
                <label class="cards__filter-dropdown-line checkbox">
                  Compras internacionales
                </label>
                <label class="cards__filter-dropdown-line checkbox">
                  Compras diarias
                </label>
                <label class="cards__filter-dropdown-line checkbox">
                  Beneficios en Aerolíneas
                </label>
                <label class="cards__filter-dropdown-line checkbox">
                  Puntos Banesco
                </label>
              </div>
            </div>
            <div class="cards__filter cards__filter--checkboxes" tabindex="-1">
              <div class="cards__filter-header">
                <span>Tipo de tarjeta</span>
              </div>
              <div class="cards__filter-dropdown">
                <label class="cards__filter-dropdown-line checkbox">
                  Crédito
                </label>
                <label class="cards__filter-dropdown-line checkbox">
                  Débito
                </label>
                <label class="cards__filter-dropdown-line checkbox">
                  Cashback
                </label>
              </div>
            </div>
            <div class="cards__filter cards__filter--slider" tabindex="-1">
              <div class="cards__filter-header">
                <span>Monto máximo</span>
              </div>
              <div class="cards__filter-dropdown">
                <div class="slider">
                  <div class="slider__dragline" id="slider"></div>
                  <div class="slider__min">0</div>
                  <div class="slider__max">max</div>
                </div>
              </div>
            </div>
            <button class="cards__filters-content-button primary-button">
              Recomiéndame
            </button>
          </div>
          <button class="cards__filters-cancel">Borrar filtros</button>
        </div>
        <div class="cards__top cards__posts-item" data-slug="mastercard-black">
          <div class="cards__top-inner">
            <div class="cards__top-img cards__posts-item-image">
              <img src="http://banesco.test/wp-content/uploads/2023/06/Mastercard-Black.jpg" alt="">
            </div>
            <div class="cards__top-content">
              <div class="cards__top-content-suptitle">Nuestra recomendación para ti</div>
              <div class="cards__top-content-title">Mastercard Black</div>
              <div class="cards__top-content-descr">Bajada de línea, 3 lineas de texto: scelerisque sed nec a a praesent parturient class dui varius vivamus fringilla ut dictum est rhoncus eu dis potenti. </div>
              <div class="cards__top-content-list">
                <div class="cards__top-content-list-item">
                  <img src="http://banesco.test/wp-content/uploads/2023/06/check.png" alt="check" />
                  Tarjeta doble saldo
                </div>
                <div class="cards__top-content-list-item">
                  <img src="http://banesco.test/wp-content/uploads/2023/06/check.png" alt="check" />
                  Multicrédito Banesco
                </div>
                <div class="cards__top-content-list-item">
                  <img src="http://banesco.test/wp-content/uploads/2023/06/check.png" alt="check" />
                  Protección de compras
                </div>
              </div>
              <div class="cards__top-content-bottom">
                <button class="cards__top-content-label cards__posts-item-label">
                  <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/vektor.svg" />
                  Comparar
                </button>
                <button class="cards__top-content-button primary-button">
                  Me interesa
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="cards__posts">
          <?php $the_query = new WP_Query(array(
            'post_type'   => 'cards',
            'post_status' => 'publish',
            'posts_per_page' => 100
          )); ?>
          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="cards__posts-item" data-slug="<?php echo get_post(get_the_ID())->post_name; ?>">
                <div class="cards__posts-item-top">
                  <div class="cards__posts-item-image">
                    <img src=<?php echo get_the_post_thumbnail_url() ?> alt="" />
                  </div>
                  <h3 class="cards__posts-item-title"><?php the_title(); ?></h3>
                </div>
                <div class="cards__posts-item-body">
                  <div class="cards__posts-item-text"><?php the_excerpt(); ?></div>
                  <div class="cards__posts-item-label">
                    <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/vektor.svg" />
                    Comparar
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <div class="cards__popup">
      <div class="container">
        <div class="cards__popup-inner-close"></div>
        <div class="cards__popup-inner">
          <div class="cards__popup-item">
            <div class="cards__popup-item-image">
              <img src="https://developer.pacific54.com/wp-content/uploads/2023/01/image-15.jpg" alt="">
            </div>
          </div>
          <div class="cards__popup-item">
            <div class="cards__popup-item-close">
              <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" />
            </div>
            <div class="cards__popup-item-image">
              <img src="https://developer.pacific54.com/wp-content/uploads/2023/01/6.jpg" alt="">
            </div>
          </div>
          <div class="cards__popup-item">
            <div class="cards__popup-item-close">
              <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" />
            </div>
            <div class="cards__popup-item-image">
              <img src="https://developer.pacific54.com/wp-content/uploads/2023/01/6.jpg" alt="">
            </div>
          </div>
          <div class="cards__popup-button">
            <button class="cards__popup-btn primary-button">Comparar Tarjetas</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.cards__filters-cancel').forEach(function(button) {
    button.addEventListener('click', function() {
      document.querySelectorAll('.cards__filter-dropdown-line').forEach(function(filter) {
        filter.classList.remove('active')
      })
      slider.noUiSlider.set(0)
    })
  })

  document.querySelectorAll('.cards').forEach(function(accordion) {
    const triger = accordion.querySelector('.cards__filters-content-button')
    const content = accordion.querySelector('.cards__top')
    triger.addEventListener('click', function() {
      content.classList.toggle('active')
    })
  })

  document.querySelectorAll('.cards__filter').forEach(function(picker) {
    picker.querySelector('.cards__filter-header span').addEventListener('click', function() {
      if (!picker.classList.contains('blured')) {
        this.parentNode.parentNode.classList.toggle('active')
        this.parentNode.parentNode.focus()
      }
    })
    picker.addEventListener('blur', function(e) {
      this.classList.remove('active')
      this.classList.add('blured')
      setTimeout(() => {
        this.classList.remove('blured')
      }, 200)
    })
  })

  document.addEventListener('DOMContentLoaded', (event) => {
    if (document.getElementById('slider')) {
      var slider = document.getElementById('slider')
      noUiSlider.create(slider, {
        start: 10000,
        connect: [true, false],
        range: {
          min: 0,
          max: 50000,
        },
        step: 1000,
        tooltips: wNumb({
          decimals: 3,
          thousand: '.',
          prefix: '$',
        }),
      })
    }
    document.querySelectorAll('.noUi-handle').forEach(function(handle) {
      handle.removeAttribute('tabindex')
    })
  })

  document.querySelectorAll('.cards__popup-inner-close').forEach(function(item) {
    item.addEventListener('click', function(label) {
      document.querySelector('.cards__popup').classList.toggle('collapsed')
    })
  })
</script>