<?php

/**
 * Features Block Template.
 */

// Create id attribute allowing for custom 'anchor' value.
$id = 'features-general-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

if( isset( $block['data']['preview_image_help'] )  ) :
	echo Pacific_Gutenberg::get_preview_image_general( $block['data']['preview_image_help'], $block['name'] );
	return;
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block features-general';
if (!empty($block['className'])) :
	$className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
	$className .= ' align' . $block['align'];
endif;

// Load values and assing defaults.
$features = get_field('features');
$block_styling = get_field('block_styling');
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
    <div class="features-general__features">
      <?php if ( $features ) : ?>
        <?php $count = 0; ?>
				<?php foreach( $features as $feature ) : ?>
          <?php
            $feature_image = Pacific_Helper::generate_image( array(
              'image' => $feature['feature_image'],
              'class' => 'features-general__feature-image',
              'attributes' => array(
                'title' => $feature['feature_image'] ? $feature['feature_image']['title'] : null,
                'alt' => $feature['feature_image'] ? $feature['feature_image']['title'] : null
              )
            ));

            $feature_title = Pacific_Helper::generate_paragraph(array(
              'text'  => $feature['feature_title'],
              'class' => 'features-general__feature-title'
            ));
          ?>
          <div class="features-general__feature">
            <?php if ( $feature_image ) : ?>
              <div class="features-general__icon-wrapper">
                <?php echo $feature_image; ?>
              </div>
            <?php endif; ?>

            <?php echo $feature_title; ?>
          </div>  
          <?php $count++; ?>
				<?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>