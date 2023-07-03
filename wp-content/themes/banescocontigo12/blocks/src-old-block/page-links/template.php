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
  <div class="page-links" style="
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
      <?php if ($attributes['linkTitle1']) : ?>
        <a class="<?php if ($attributes['linkActive1']['active']){ echo "active-link"; } ?>" href="<?= $attributes['linkHref1'] ?>"><?= $attributes['linkTitle1'] ?></a>
      <?php endif; ?>
      <?php if ($attributes['linkTitle2']) : ?>
        <a class="<?php if ($attributes['linkActive2']['active']){ echo "active-link"; } ?>" href="<?= $attributes['linkHref2'] ?>"><?= $attributes['linkTitle2'] ?></a>
      <?php endif; ?>
      <?php if ($attributes['linkTitle3']) : ?>
        <a class="<?php if ($attributes['linkActive3']['active']){ echo "active-link"; } ?>" href="<?= $attributes['linkHref3'] ?>"><?= $attributes['linkTitle3'] ?></a>
      <?php endif; ?>
      <?php if ($attributes['linkTitle4']) : ?>
        <a class="<?php if ($attributes['linkActive4']['active']){ echo "active-link"; } ?>" href="<?= $attributes['linkHref4'] ?>"><?= $attributes['linkTitle4'] ?></a>
      <?php endif; ?>
      <?php if ($attributes['linkTitle5']) : ?>
        <a class="<?php if ($attributes['linkActive5']['active']){ echo "active-link"; } ?>" href="<?= $attributes['linkHref5'] ?>"><?= $attributes['linkTitle5'] ?></a>
      <?php endif; ?>
  </div>
</section>