<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="compare-cards" style="
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
      <div class="compare-cards__top">
        <h2 class="compare-cards__title"><?= $attributes['title'] ?></h2>
      </div>
    </div>
    <div class="compare-cards__wrapper">
      <div class="container">
        <div class="compare-cards__inner">
          <div class="compare-cards__table">
            <div class="compare-cards__row compare-cards__row--header">
              <div class="compare-cards__data"></div>
              <div class="compare-cards__data">
                <div class="compare-cards__card">
                  <?php if (isset($_GET['query'])) {
                    $query = $_GET['query'];
                    $cards = explode(',', $query);
                    if (isset($cards[0]) && $cards[0] != '') {
                      $query = get_posts(array(
                        'name'        => $cards[0],
                        'post_type'   => 'cards',
                        'post_status' => 'publish',
                        'numberposts' => 1
                      ));
                      $post1 = $query[0];
                    }
                    if (isset($cards[1]) && $cards[1] != '') {
                      $query = get_posts(array(
                        'name'        => $cards[1],
                        'post_type'   => 'cards',
                        'post_status' => 'publish',
                        'numberposts' => 1
                      ));
                      $post2 = $query[0];
                    }
                    if (isset($cards[2]) && $cards[2] != '') {
                      $query = get_posts(array(
                        'name'        => $cards[2],
                        'post_type'   => 'cards',
                        'post_status' => 'publish',
                        'numberposts' => 1
                      ));
                      $post3 = $query[0];
                    }
                  };  ?>
                  <?php if (isset($post1)) : ?> <div class="compare-cards__card-close compare-cards__card-close--1">
                      <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" />
                    </div>
                  <?php endif;  ?>
                  <div class="compare-cards__card-image">
                    <?php if (isset($post1)) : echo '<img src="' . wp_get_attachment_image_src(get_post_thumbnail_id($post1->ID), 'single-post-thumbnail')[0] . '" alt="card2" />'; ?>
                    <?php else : echo '<img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/image-15.jpg" alt="card2" />'; ?>
                    <?php endif;  ?>
                  </div>
                  <div class="compare-cards__card-title"><?php if (isset($post1)) : echo $post1->post_title;
                                                          endif;  ?></div>
                  <div class="compare-cards__card-details"><?php if (isset($post1)) : echo $post1->post_content;
                                                            endif;  ?></div>
                  <?php if (isset($post1)) :   ?>
                    <div class="compare-cards__card-buttons">
                      <a class="compare-cards__card-button primary-button" href="https://banesco.do.pacific54.com/tarjetas-main/tarjetas-de-credito/">
                        Me interesa
                      </a>
                    </div>
                  <?php else :
                    $q = new WP_Query(array(
                      'post_type'   => 'cards',
                      'post_status' => 'publish',
                      'posts_per_page' => 100
                    ));
                  ?>
                    <div class="compare-cards__card-selects">
                      <select class="compare-cards__card-select compare-cards__card-select--1" id="1">
                        <option value="" disabled selected>Agrega otra tarjeta</option>
                        <?php
                        if (isset($_GET['query'])) {
                          foreach ($q->posts as $post) {
                            if (!in_array($post->post_name, explode(',', $_GET['query']))) {
                              echo '<option value="' . $post->post_name . '">' . $post->post_title . '</option>';
                            }
                          }
                        } else {
                          foreach ($q->posts as $post) {
                            echo '<option value="' . $post->post_name . '">' . $post->post_title . '</option>';
                          }
                        } ?>
                      </select>
                    </div>
                  <?php endif;  ?>
                </div>
              </div>
              <div class="compare-cards__data">
                <div class="compare-cards__card">
                  <?php if (isset($post2)) : ?> <div class="compare-cards__card-close compare-cards__card-close--2">
                      <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" />
                    </div>
                  <?php endif;  ?>
                  <div class="compare-cards__card-image">
                    <?php if (isset($post2)) : echo '<img src="' . wp_get_attachment_image_src(get_post_thumbnail_id($post2->ID), 'single-post-thumbnail')[0] . '" alt="card2" />'; ?>
                    <?php else : echo '<img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/image-15.jpg" alt="card2" />'; ?>
                    <?php endif;  ?>
                  </div>
                  <div class="compare-cards__card-title"><?php if (isset($post2)) : echo $post2->post_title;
                                                          endif;  ?></div>
                  <div class="compare-cards__card-details"><?php if (isset($post2)) : echo $post2->post_content;
                                                            endif;  ?></div>
                  <?php if (isset($post2)) :   ?>
                    <div class="compare-cards__card-buttons">
                      <a class="compare-cards__card-button primary-button" href="https://banesco.do.pacific54.com/tarjetas-main/tarjetas-de-credito/">
                        Me interesa
                      </a>
                    </div>
                  <?php else :
                    $q = new WP_Query(array(
                      'post_type'   => 'cards',
                      'post_status' => 'publish',
                      'posts_per_page' => 100
                    ));
                  ?>
                    <div class="compare-cards__card-selects">
                      <select class="compare-cards__card-select compare-cards__card-select--2" id="2">
                        <option value="" disabled selected>Agrega otra tarjeta</option>
                        <?php
                        if (isset($_GET['query'])) {
                          foreach ($q->posts as $post) {
                            if (!in_array($post->post_name, explode(',', $_GET['query']))) {
                              echo '<option value="' . $post->post_name . '">' . $post->post_title . '</option>';
                            }
                          }
                        } else {
                          foreach ($q->posts as $post) {
                            echo '<option value="' . $post->post_name . '">' . $post->post_title . '</option>';
                          }
                        } ?>
                      </select>
                    </div>
                  <?php endif;  ?>
                </div>
              </div>
              <div class="compare-cards__data">
                <div class="compare-cards__card">
                  <?php if (isset($post3)) : ?> <div class="compare-cards__card-close compare-cards__card-close--3">
                      <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/06/close.svg" />
                    </div>
                  <?php endif;  ?>
                  <div class="compare-cards__card-image">
                    <?php if (isset($post3)) : echo '<img src="' . wp_get_attachment_image_src(get_post_thumbnail_id($post3->ID), 'single-post-thumbnail')[0] . '" alt="card2" />'; ?>
                    <?php else : echo '<img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/image-15.jpg" alt="card2" />'; ?>
                    <?php endif;  ?>
                  </div>
                  <div class="compare-cards__card-title"><?php if (isset($post3)) : echo $post3->post_title;
                                                          endif;  ?></div>
                  <div class="compare-cards__card-details"><?php if (isset($post3)) : echo $post3->post_content;
                                                            endif;  ?></div>
                  <?php if (isset($post3)) :   ?>
                    <div class="compare-cards__card-buttons">
                      <a class="compare-cards__card-button primary-button" href="https://banesco.do.pacific54.com/tarjetas-main/tarjetas-de-credito/">
                        Me interesa
                      </a>
                    </div>
                  <?php else :
                    $q = new WP_Query(array(
                      'post_type'   => 'cards',
                      'post_status' => 'publish',
                      'posts_per_page' => 100
                    ));
                  ?>
                    <div class="compare-cards__card-selects">
                      <select class="compare-cards__card-select compare-cards__card-select--3" id="3">
                        <option value="" disabled selected>Agrega otra tarjeta</option>
                        <?php
                        if (isset($_GET['query'])) {
                          foreach ($q->posts as $post) {
                            if (!in_array($post->post_name, explode(',', $_GET['query']))) {
                              echo '<option value="' . $post->post_name . '">' . $post->post_title . '</option>';
                            }
                          }
                        } else {
                          foreach ($q->posts as $post) {
                            echo '<option value="' . $post->post_name . '">' . $post->post_title . '</option>';
                          }
                        } ?>
                      </select>
                    </div>
                  <?php endif;  ?>
                </div>
              </div>
            </div>
            <div class="compare-cards__row">
              <div class="compare-cards__data">
                <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/map.svg" alt="map" />
                <?= $attributes['internacional'] ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post1) && get_field('internacional', $post1->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post2) && get_field('internacional', $post2->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post3) && get_field('internacional', $post3->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
            </div>
            <div class="compare-cards__row">
              <div class="compare-cards__data">
                <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/nfc.svg" alt="nfc" />
                <?= $attributes['chip'] ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post1) && get_field('chip', $post1->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post2) && get_field('chip', $post2->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post3) && get_field('chip', $post3->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
            </div>
            <div class="compare-cards__row">
              <div class="compare-cards__data">
                <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/money.svg" alt="money" />
                <?= $attributes['multicredito_banesco'] ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post1) && get_field('multicredito_banesco', $post1->ID)) : ?><?php the_field('multicredito_banesco', $post1->ID); ?><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post2) && get_field('multicredito_banesco', $post2->ID)) : ?><?php the_field('multicredito_banesco', $post2->ID); ?><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post3) && get_field('multicredito_banesco', $post3->ID)) : ?><?php the_field('multicredito_banesco', $post3->ID); ?><?php endif; ?>
              </div>
            </div>
            <div class="compare-cards__row">
              <div class="compare-cards__data">
                <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/smile.svg" alt="smile" />
                <?= $attributes['puntos_verdes'] ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post1) && get_field('puntos_verdes', $post1->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post2) && get_field('puntos_verdes', $post2->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post3) && get_field('puntos_verdes', $post3->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
            </div>
            <div class="compare-cards__row">
              <div class="compare-cards__data">
                <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/secure.svg" alt="secure" />
                <?= $attributes['proteccion_y_seguros'] ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post1) && get_field('proteccion_y_seguros', $post1->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post2) && get_field('proteccion_y_seguros', $post2->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post3) && get_field('proteccion_y_seguros', $post3->ID)) : ?><img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/check.svg" alt="check" /><?php endif; ?>
              </div>
            </div>
            <div class="compare-cards__row">
              <div class="compare-cards__data">
                <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/support.svg" alt="support" />
                <?= $attributes['asistencia'] ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post1) && get_field('asistencia', $post1->ID)) : ?><?php the_field('asistencia', $post1->ID); ?><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post2) && get_field('asistencia', $post2->ID)) : ?><?php the_field('asistencia', $post2->ID); ?><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post3) && get_field('asistencia', $post3->ID)) : ?><?php the_field('asistencia', $post3->ID); ?><?php endif; ?>
              </div>
            </div>
            <div class="compare-cards__row">
              <div class="compare-cards__data">
                <img src="https://banesco.do.pacific54.com/wp-content/uploads/2023/01/bonus.svg" alt="bonus" />
                <?= $attributes['mas_detalles'] ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post1) && get_field('mas_detalles', $post1->ID)) : ?><?php the_field('mas_detalles', $post1->ID); ?><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post2) && get_field('mas_detalles', $post2->ID)) : ?><?php the_field('mas_detalles', $post2->ID); ?><?php endif; ?>
              </div>
              <div class="compare-cards__data">
                <?php if (isset($post3) && get_field('mas_detalles', $post3->ID)) : ?><?php the_field('mas_detalles', $post3->ID); ?><?php endif; ?>
              </div>
            </div>
            <div class="compare-cards__row compare-cards__row--footer">
              <?= $attributes['bottom'] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.compare-cards__card-select--1').forEach(function(select) {
    select.addEventListener('change', function(e) {
      const array = window.location.search ? window.location.search.split('=')[1].split(',') : ['', '', '']
      array[0] = e.target.value
      window.location.href = window.location.pathname + '?query=' + array.join(',')
    })
  })

  document.querySelectorAll('.compare-cards__card-close--1').forEach(function(select) {
    select.addEventListener('click', function(e) {
      const array = window.location.search ? window.location.search.split('=')[1].split(',') : ['', '', '']
      array[0] = ''
      window.location.href = window.location.pathname + '?query=' + array.join(',')
    })
  })

  document.querySelectorAll('.compare-cards__card-select--2').forEach(function(select) {
    select.addEventListener('change', function(e) {
      const array = window.location.search ? window.location.search.split('=')[1].split(',') : ['', '', '']
      array[1] = e.target.value
      window.location.href = window.location.pathname + '?query=' + array.join(',')
    })
  })

  document.querySelectorAll('.compare-cards__card-close--2').forEach(function(select) {
    select.addEventListener('click', function(e) {
      const array = window.location.search ? window.location.search.split('=')[1].split(',') : ['', '', '']
      array[1] = ''
      window.location.href = window.location.pathname + '?query=' + array.join(',')
    })
  })

  document.querySelectorAll('.compare-cards__card-select--3').forEach(function(select) {
    select.addEventListener('change', function(e) {
      const array = window.location.search ? window.location.search.split('=')[1].split(',') : ['', '', '']
      array[2] = e.target.value
      window.location.href = window.location.pathname + '?query=' + array.join(',')
    })
  })

  document.querySelectorAll('.compare-cards__card-close--3').forEach(function(select) {
    select.addEventListener('click', function(e) {
      const array = window.location.search ? window.location.search.split('=')[1].split(',') : ['', '', '']
      array[2] = ''
      window.location.href = window.location.pathname + '?query=' + array.join(',')
    })
  })
</script>