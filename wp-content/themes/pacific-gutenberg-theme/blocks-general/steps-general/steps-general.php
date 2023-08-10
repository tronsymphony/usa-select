<?php

/**
 * Steps Block Template.
 */

// Create id attribute allowing for custom 'anchor' value.
$id = 'steps-general-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

if( isset( $block['data']['preview_image_help'] )  ) :
	echo Pacific_Gutenberg::get_preview_image_general( $block['data']['preview_image_help'], $block['name'] );
	return;
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block steps-general';
if (!empty($block['className'])) :
	$className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
	$className .= ' align' . $block['align'];
endif;

// Load values and assing defaults.
$header = get_field('header');
$steps = get_field('steps');
$bottom_text = get_field('bottom_text');
$block_styling = get_field('block_styling');

$header = Pacific_Helper::generate_header(array(
  'text' => $header['title'],
  'tag' => $header['tag'],
  'class' => 'steps-general__section-title'
));

$bottom_text = Pacific_Helper::generate_paragraph(array(
  'text'  => $bottom_text,
  'class' => 'steps-general__bottom-text'
));
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="
--padding-top: <?= ($block_styling['padding-top']) ? $block_styling['padding-top'].'px' : '0px' ?>;
--paddings-top--mobile: <?= ($block_styling['paddings-top--mobile']) ? $block_styling['paddings-top--mobile'].'px' : '0px' ?>;
--paddings-bottom: <?= ($block_styling['paddings-bottom']) ? $block_styling['paddings-bottom'].'px' : '0px' ?>;
--paddings-bottom--mobile: <?= ($block_styling['paddings-bottom--mobile']) ? $block_styling['paddings-bottom--mobile'].'px' : '0px' ?>;
--margins-top: <?= ($block_styling['margins-top']) ? $block_styling['margins-top'].'px' : '0px' ?>;
--margins-top--mobile: <?= ($block_styling['margins-top--mobile']) ? $block_styling['margins-top--mobile'].'px' : '0px' ?>;
--margins-bottom: <?= ($block_styling['margins-bottom']) ? $block_styling['margins-bottom'].'px' : '0px' ?>;
--margins-bottom--mobile: <?= ($block_styling['margins-bottom--mobile']) ? $block_styling['margins-bottom--mobile'].'px' : '0px' ?>;
--gradient: <?= ($block_styling['gradient'])? $block_styling['gradient'] : '#fff' ?>;"
>
	<div class="container-sm">
		<div class="steps-general__main-wrapper">
			<?php echo $header; ?>
			<?php if( $steps ) : ?>
				<div class="steps-general__steps-wrapper">
					<?php foreach( $steps as $step ) : ?>
						<?php
							$step_icon = Pacific_Helper::generate_image( array(
								'image' => $step['step_icon'],
								'attributes' => array(
									'title' => $step['step_icon'] ? $step['step_icon']['title'] : null,
									'alt' => $step['step_icon'] ? $step['step_icon']['title'] : null,
									'class' => 'steps-general__icon'
								)
							));
						?>
						<?php if ( $step_icon ) : ?>
							<div class="steps-general__step">
								<div class="steps-general__step-icon">
									<?php echo $step_icon; ?>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<?php echo $bottom_text; ?>
		</div>
	</div>
</section>