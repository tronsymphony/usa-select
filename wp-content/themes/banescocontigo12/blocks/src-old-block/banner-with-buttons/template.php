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
    <div class="banner-with-buttons" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-big-spacing="<?= ($attributes['bigSpacing']) ? "true" : "false" ?>">
        <div class="container">
            <?php if ($attributes['title']) : ?>
            <h2 class="banner-with-buttons__title"><?= $attributes['title'] ?></h2>
            <?php endif; ?>
            <div
                class="banner-with-buttons__inner <?= ($attributes['whiteBg']) ? 'banner-with-buttons__inner-white' : '' ?> ">
                <?php if ($attributes['items']) : ?>
                <div class="banner-with-buttons__items">
                    <?php $module_count = 0; foreach ($attributes['items'] as $item) : 
                        if(!$item['title']){
                            continue;
                        }
                        ?>
                    <div class="banner-with-buttons__item" style="
                --widths-title: <?= ($item['widths']['title']) ? $item['widths']['title'] : '300px' ?>;
                --widths-title--mobile: <?= ($item['widths']['mTitle']) ? $item['widths']['mTitle'] : '100%' ?>;
                --widths-text: <?= ($item['widths']['text']) ? $item['widths']['text'] : '300px' ?>;
                --widths-text--mobile: <?= ($item['widths']['mText']) ? $item['widths']['mText'] : '100%' ?>;
								">
                        <?php if ($item['image']['url']) : ?>
                        <div class="banner-with-buttons__item-image">
                            <?php if ($item['image']['url'] == 'card.svg') : ?>
                            <img src="<?php the_block_url(__DIR__); ?>/assets/card.svg" alt="icon" />
                            <?php elseif ($item['image']['url'] == 'pdf.svg') : ?>
                            <img src="<?php the_block_url(__DIR__); ?>/assets/pdf.svg" alt="icon" />
                            <?php elseif ($item['image']['url'] == 'page.svg') : ?>
                            <img src="<?php the_block_url(__DIR__); ?>/assets/page.svg" alt="icon" />
                            <?php elseif ($item['image']['url'] == '21.svg') : ?>
                            <img src="<?php the_block_url(__DIR__); ?>/assets/21.svg" alt="icon" />
                            <?php elseif ($item['image']['url'] == 'bag.svg') : ?>
                            <img src="<?php the_block_url(__DIR__); ?>/assets/bag.svg" alt="icon" />
                            <?php elseif ($item['image']['url'] == 'tablet.svg') : ?>
                            <img src="<?php the_block_url(__DIR__); ?>/assets/tablet.svg" alt="icon" />
                            <?php elseif ($item['image']['url'] == 'image.svg') : ?>
                            <img src="<?php the_block_url(__DIR__); ?>/assets/image.svg" alt="icon" />
                            <?php elseif ($item['image']['url']) : ?>
                            <img src="<?= $item['image']['url'] ?>" alt="icon" />
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($item['title'] || $item['description']) : ?>
                        <div class="banner-with-buttons__item-content">
                            <?php if ($item['title']) : ?>
                            <h3 class="banner-with-buttons__item-title"><?= $item['title'] ?></h3>
                            <?php endif; ?>
                            <?php if ($item['description']) : ?>
                            <div class="banner-with-buttons__item-description text"><?= $item['description'] ?>

                            <?php if (!empty($item['module_title'])) : ?>
                              <span class="link-module" data-module="<?= $module_count; ?>"><a href="#">aqui</a></span>
                            <?php endif; ?>

                            </div>
                            <?php endif; ?>
                            <?php if ($item['button']) : ?>
                            <div class="banner-with-buttons__item-button link-button link-module">
                              <?= $item['button'] ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                    </div>
                    <?php $module_count++; endforeach; ?>
                </div>
                <?php endif; ?>
                <?php if ($attributes['extra']['button'] || $attributes['extra']['content']) : ?>
                <div class="banner-with-buttons__extra">
                    <div class="banner-with-buttons__grey-buttons">
                        <button class="button banner-with-buttons__grey-button button1 active">
                            <?= $attributes['extra']['button'] ?>
                            <img src="<?php the_block_url(__DIR__); ?>/assets/arrow.svg">
                        </button>
                    </div>
                    <div class="banner-with-buttons__hidden text active">
                        <?= $attributes['extra']['content'] ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php if ($attributes['outlinedButton'] || $attributes['primaryButton']) : ?>
            <div class="banner-with-buttons__buttons">
                <?php if ($attributes['outlinedButton']) : ?>
                <a class="banner-with-buttons__button outlined-button"
                    href="<?= $attributes['outlinedButtonTarget'] ?>">
                    <?= $attributes['outlinedButton'] ?>
                </a>
                <?php endif; ?>
                <?php if ($attributes['primaryButton']) : ?>
                <a class="banner-with-buttons__button primary-button" href="<?= $attributes['primaryButtonTarget'] ?>">
                    <?= $attributes['primaryButton'] ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ($attributes['extraText'] || $attributes['extraLink']) : ?>
            <div class="banner-with-buttons__extra-text">
                <?php if ($attributes['extraText']) : ?>
                <div class="banner-with-buttons__extra-text-content text">
                    <?= $attributes['extraText'] ?>
                </div>
                <?php endif; ?>
                <?php if ($attributes['extraLink'] && $attributes['extraLinkTarget']) : ?>
                <a class="banner-with-buttons__extra-text-link link-button"
                    href="<?= $attributes['extraLinkTarget'] ?>">
                    <?= $attributes['extraLink'] ?>
                </a>

                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php if ($attributes['items']) : ?>
  <?php $module_count=0; foreach ($attributes['items'] as $item) : ?>
    <?php if ($item['title'] || $item['description']) : ?>
            <div class="aqui__modal--content" data-module-popup="<?= $module_count; ?>">
                <h2 class="aqui__modal--content-title"><?= $item['module_title']; ?></h2>
                <?= $item['module_description']; ?>
                <span class="aqui__modal--close">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.1159 9.22559L18.5659 3.10827C18.8483 2.83976 19.007 2.47558 19.007 2.09585C19.007 1.71611 18.8483 1.35193 18.5659 1.08342C18.2834 0.814911 17.9003 0.664062 17.5009 0.664062C17.1014 0.664062 16.7183 0.814911 16.4359 1.08342L10.0009 7.215L3.56589 1.08342C3.28343 0.814911 2.90034 0.664062 2.50089 0.664062C2.10143 0.664063 1.71834 0.814911 1.43588 1.08342C1.15343 1.35193 0.994747 1.71611 0.994747 2.09585C0.994747 2.47558 1.15343 2.83976 1.43588 3.10827L7.88589 9.22559L1.43588 15.3429C1.29529 15.4755 1.1837 15.6332 1.10755 15.8069C1.0314 15.9807 0.992188 16.1671 0.992188 16.3553C0.992188 16.5436 1.0314 16.73 1.10755 16.9037C1.1837 17.0775 1.29529 17.2352 1.43588 17.3678C1.57533 17.5014 1.74123 17.6075 1.92402 17.6799C2.10681 17.7523 2.30287 17.7895 2.50089 17.7895C2.6989 17.7895 2.89496 17.7523 3.07775 17.6799C3.26054 17.6075 3.42644 17.5014 3.56589 17.3678L10.0009 11.2362L16.4359 17.3678C16.5753 17.5014 16.7412 17.6075 16.924 17.6799C17.1068 17.7523 17.3029 17.7895 17.5009 17.7895C17.6989 17.7895 17.895 17.7523 18.0778 17.6799C18.2605 17.6075 18.4264 17.5014 18.5659 17.3678C18.7065 17.2352 18.8181 17.0775 18.8942 16.9037C18.9704 16.73 19.0096 16.5436 19.0096 16.3553C19.0096 16.1671 18.9704 15.9807 18.8942 15.8069C18.8181 15.6332 18.7065 15.4755 18.5659 15.3429L12.1159 9.22559Z"
                            fill="#708090" />
                    </svg>
                </span>
            </div>
      <?php endif; ?>
  <?php $module_count++; endforeach; ?>
  <div class="aqui__modal--content-overlay"></div>
<?php endif; ?>

<script>
    document.querySelectorAll('.link-module').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault()
            console.log(document.querySelector('[data-module-popup="'+item.dataset.module+'"]'))

            document.querySelector('[data-module-popup="'+item.dataset.module+'"]').classList.add('active-modal')
            document.querySelector('.aqui__modal--content-overlay').classList.add('active-modal')
                
        })
    })
    document.querySelectorAll('.aqui__modal--close').forEach(function(item) {
      item.addEventListener('click', function(e) {
        
        document.querySelectorAll('.aqui__modal--content').forEach(function(item) {
          item.classList.remove('active-modal')
        })
        document.querySelector('.aqui__modal--content-overlay').classList.remove('active-modal')
      })
    })

</script>

<script>
    const bannerBtns = document.getElementsByClassName("banner-with-buttons");

    if (bannerBtns.length > 0) {
        document.querySelectorAll('.banner-with-buttons').forEach(function(calculator) {
            const currencyBtn = calculator.querySelector('.button1')

            currencyBtn.addEventListener('click', function(e) {
                document.querySelector('.banner-with-buttons__hidden').classList.toggle(
                    'active')
                currencyBtn.classList.toggle('active')
            })
        })
    }
</script>