<?php

/**
 * Special Services Block Template.
 */

// Create id attribute allowing for custom 'anchor' value.
$id = 'speacial-rates-general-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

if( isset( $block['data']['preview_image_help'] )  ) :
	echo Pacific_Gutenberg::get_preview_image_general( $block['data']['preview_image_help'], $block['name'] );
	return;
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block speacial-rates-general';
if (!empty($block['className'])) :
	$className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
	$className .= ' align' . $block['align'];
endif;

// Load values and assing defaults.
$block_styling = get_field('block_styling');
$top_title = get_field('top_title');
$rates = get_field('rates');
$buttons = get_field('buttons');

$top_title = Pacific_Helper::generate_paragraph(array(
  'text'  => $top_title,
  'class' => 'speacial-rates-general__top-title'
));
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="
--padding-top: <?= ($block_styling['padding-top']) ? $block_styling['padding-top'].'px' : '20px' ?>;
--paddings-top--mobile: <?= ($block_styling['paddings-top--mobile']) ? $block_styling['paddings-top--mobile'].'px' : '20px' ?>;
--paddings-bottom: <?= ($block_styling['paddings-bottom']) ? $block_styling['paddings-bottom'].'px' : '20px' ?>;
--paddings-bottom--mobile: <?= ($block_styling['paddings-bottom--mobile']) ? $block_styling['paddings-bottom--mobile'].'px' : '20px' ?>;
--margins-top: <?= ($block_styling['margins-top']) ? $block_styling['margins-top'].'px' : '0px' ?>;
--margins-top--mobile: <?= ($block_styling['margins-top--mobile']) ? $block_styling['margins-top--mobile'].'px' : '0px' ?>;
--margins-bottom: <?= ($block_styling['margins-bottom']) ? $block_styling['margins-bottom'].'px' : '0px' ?>;
--margins-bottom--mobile: <?= ($block_styling['margins-bottom--mobile']) ? $block_styling['margins-bottom--mobile'].'px' : '0px' ?>;
--gradient: <?= ($block_styling['gradient'])? $block_styling['gradient'] : '#fff' ?>;"
>
  <div class="container">
    <?php echo $top_title; ?>
    <?php if ( $rates ) : ?>
      <div class="speacial-rates-general__rates">
        <?php foreach( $rates as $rate ) : ?>
          <?php
            $rate_big_rate = Pacific_Helper::generate_paragraph(array(
              'text'  => $rate['big_rate'],
              'class' => 'speacial-rates-general__big-rate'
            ));

            $rate_symbol = Pacific_Helper::generate_paragraph(array(
              'text'  => $rate['rate_symbol'],
              'class' => 'speacial-rates-general__rate-symbol'
            ));

            $rate_abbreviature = Pacific_Helper::generate_paragraph(array(
              'text'  => $rate['rate_abbreviature'],
              'class' => 'speacial-rates-general__rate-abbreviature'
            ));

            $rate_bottom_text = Pacific_Helper::generate_paragraph(array(
              'text'  => $rate['bottom_text'],
              'class' => 'speacial-rates-general__rate-bottom-text'
            ));
          ?>
          <div class="speacial-rates-general__rate">
            <div class="speacial-rates-general__inner-wrapper">
              <div class="speacial-rates-general__big-rate-wrapper">
                <?php echo $rate_big_rate; ?>
                <div class="speacial-rates-general__symbol-abbreviature-wrapper">
                  <?php echo $rate_symbol; ?>
                  <?php echo $rate_abbreviature; ?>
                </div>
              </div>
              <?php echo $rate_bottom_text; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <?php if ( $buttons ) : ?>
      <div class="speacial-rates-general__button-wrapper">
        <?php foreach( $buttons as $button ) : ?>
          <?php 
            $button = Pacific_Helper::generate_acf_link(array(
              'link' => $button['button']['link'],
              'class' => 'speacial-rates-general__btn btn ' . $button['button']['button_options'],
              'link_attributes' => array(
                'title' => $button['button']['link'] ? $button['button']['link']['title'] : null,
                'target' => $button['button']['link']['target'] ?? null
              )
            ));  
          ?>
          <?php echo $button; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
