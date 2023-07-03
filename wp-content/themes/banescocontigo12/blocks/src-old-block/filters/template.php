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
  <div class="filters" style="
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
      <div class="filters__inner">
        <?php if ($attributes['title']) : ?>
          <div class="filters__title"><?= $attributes['title'] ?></div>
        <?php endif; ?>
        <?php if ($attributes['items']) : ?>
          <div class="filters__list">
            <?php foreach ($attributes['items'] as $item) : ?>
              <button class="filters__item">
                <?php if ($item['title']) : ?>
                  <?= $item['title'] ?>
                <?php endif; ?>
              </button>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<script>
  const filters = document.querySelectorAll('.filters__item');

  if (filters[0]) {
    console.log(filters[0].innerText);
    filters[0].classList.add('active');
    document.querySelector('body').dataset.filter = filters[0].innerText;
  }

  document.querySelectorAll('.filters__item').forEach(function(filter) {
    filter.addEventListener('click', function(e) {
      filters.forEach(function(item) {
        item.classList.remove('active')
      })
      filter.classList.add('active')
      document.querySelector('body').dataset.filter = filter.innerText;
    })
  })
</script>