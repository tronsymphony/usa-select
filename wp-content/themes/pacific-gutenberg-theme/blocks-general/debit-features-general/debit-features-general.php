<?php

/**
 * Debit Features Block Template.
 */

// Create id attribute allowing for custom 'anchor' value.
$id = 'debit-features-general-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

if( isset( $block['data']['preview_image_help'] )  ) :
	echo Pacific_Gutenberg::get_preview_image_general( $block['data']['preview_image_help'], $block['name'] );
	return;
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block debit-features-general';
if (!empty($block['className'])) :
	$className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
	$className .= ' align' . $block['align'];
endif;

// Load values and assing defaults.
$header = get_field('header');
$debit_features = get_field('debit_features');
$block_styling = get_field('block_styling');

$header = Pacific_Helper::generate_header(array(
  'text' => $header['title'],
  'tag' => $header['tag'],
  'class' => 'debit-features-general__section-title'
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
    <?php echo $header; ?>
    <?php if ( $debit_features ) : ?>
      <div class="debit-features-general__wrapper">
        <?php foreach( $debit_features as $debit_feature ) : ?>
          <?php
            $icon = Pacific_Helper::generate_image( array(
              'image' => $debit_feature['icon'],
              'class' => 'debit-features-general__icon',
              'attributes' => array(
                'title' => $debit_feature['icon'] ? $debit_feature['icon']['title'] : null,
                'alt' => $debit_feature['icon'] ? $debit_feature['icon']['title'] : null
              )
            ));

            $title = Pacific_Helper::generate_paragraph(array(
              'text'  => $debit_feature['title'],
              'class' => 'debit-features-general__title'
            ));

            $text = Pacific_Helper::generate_paragraph(array(
              'text'  => $debit_feature['text'],
              'class' => 'debit-features-general__text'
            ));
          ?>
          <?php if ( $icon || $title || $text ) : ?>
            <div class="debit-features-general__feature">
            <?php echo $icon; ?>
            <?php echo $title; ?>
            <?php echo $text; ?>
          </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>