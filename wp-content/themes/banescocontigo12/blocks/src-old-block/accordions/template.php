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
  <div class="accordions" style="
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
        <h2 class="accordions__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="accordions__inner">
          <?php if ($attributes['columns'] == "1") : ?>
            <?php foreach ($attributes['items'] as $item) : ?>
              <div class="accordions__item">
                <div class="accordions__item-header">
                  <?php if ($item['title']) : ?>
                    <h3 class="accordions__item-title"><?= $item['title'] ?></h3>
                  <?php endif; ?>
                </div>
                <div class="accordions__item-body">
                  <div class="accordions__item-body-inner">
                    <?php if ($item['iframe']) : ?>
                      <iframe class="accordions__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                    <?php endif; ?>
                    <?php if ($item['content']) : ?>
                      <div class="accordions__item-content text"><?= $item['content'] ?></div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          <?php if ($attributes['columns'] == "2") : ?>
            <div class="accordions__column">
              <?php foreach ($attributes['items'] as $key => $item) : ?>
                <?php if ($key % 2 == 0) : ?>
                  <div class="accordions__item">
                    <div class="accordions__item-header">
                      <?php if ($item['title']) : ?>
                        <h3 class="accordions__item-title"><?= $item['title'] ?></h3>
                      <?php endif; ?>
                    </div>
                    <div class="accordions__item-body">
                      <div class="accordions__item-body-inner">
                        <?php if ($item['iframe'] && $item['iframe']) : ?>
                          <iframe class="accordions__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                        <?php endif; ?>
                        <?php if ($item['content'] && $item['content']) : ?>
                          <div class="accordions__item-content text"><?= $item['content'] ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
            <div class="accordions__column">
              <?php foreach ($attributes['items'] as $key => $item) : ?>
                <?php if ($key % 2 != 0) : ?>
                  <div class="accordions__item">
                    <div class="accordions__item-header">
                      <?php if ($item['title'] && $item['title']) : ?>
                        <h3 class="accordions__item-title"><?= $item['title'] ?></h3>
                      <?php endif; ?>
                    </div>
                    <div class="accordions__item-body">
                      <div class="accordions__item-body-inner">
                        <?php if ($item['iframe'] && $item['iframe']) : ?>
                          <iframe class="accordions__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
                        <?php endif; ?>
                        <?php if ($item['content'] && $item['content']) : ?>
                          <div class="accordions__item-content text"><?= $item['content'] ?></div>
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
</section>

<script>
  document.querySelectorAll('.accordions').forEach(function(accordions) {
    accordions.querySelectorAll('.accordions__item').forEach(function(accordion) {
      const triger = accordion.querySelector('.accordions__item-header')
      const content = accordion.querySelector('.accordions__item-body')
      triger.addEventListener('click', function() {
        accordion.classList.toggle('active')
      })
    })
  })
</script>
