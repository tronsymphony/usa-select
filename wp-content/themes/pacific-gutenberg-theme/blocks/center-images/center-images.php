<?php

/**
 * center images Block Template.
 *
 * @param	 array $block The block settings and attributes.
 * @param	 string $content The block inner HTML (empty).
 * @param	 bool $is_preview True during AJAX preview.
 * @param	 (int|string) $post_id The post ID this block is saved to.
 */

if( isset( $block['data']['preview_image_help'] )  ) :
	echo Pacific_Gutenberg::get_preview_image( $block['data']['preview_image_help'], $block['name'] );
	return;
endif;

// Create id attribute allowing for custom 'anchor' value.
$id = 'center-images-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block center-images';
if (!empty($block['className'])) :
	$className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
	$className .= ' align' . $block['align'];
endif;

$className = apply_filters( 'pacific_block_class', $className, $block, $post_id );

$block_styling = get_field('styling'); 
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
--gradient: <?= ($block_styling['gradient'])? $block_styling['gradient'] : '#fff' ?>;
">
	
    <div class="container">
		<div class="first_image enable-trig"><img src="<?php the_field('first_image'); ?>" alt="" class="float"></div>
		<div class="second_image position-<?php the_field('position'); ?> position_vertical-<?php the_field('position_vertical'); ?> enable-trig" style="<?php if(get_field('zindex')){echo 'z-index:'.get_field('zindex');}; ?>"><img src="<?php the_field('second_image'); ?>" alt="" class="float"></div>

		<?php if(get_field('third_image')): ?>
			<div class="third_image enable-trig">
				<img src="<?php the_field('third_image'); ?>" alt="" class="float">
			</div>
		<?php endif; ?>

    </div>
</section>

<style>

	@media screen and (min-width:768px) {
		
	.third_image img{
		position:relative;
		<?php if(get_field('third_image_top_position')): ?>
			top:<?php the_field('third_image_top_position'); ?>px!important;
		<?php endif; ?>
		<?php if(get_field('third_image_hori_position')): ?>
			right:<?php the_field('third_image_hori_position'); ?>px!important;
		<?php endif; ?>
	}

	.second_image img{
		position:relative;
		<?php if(get_field('second_image_top_position')): ?>
			top:<?php the_field('second_image_top_position'); ?>px!important;
		<?php endif; ?>
		<?php if(get_field('second_image_hori_position')): ?>
			right:<?php the_field('second_image_hori_position'); ?>px!important;
		<?php endif; ?>
	}
}


	.first_image{ 
		transform: translateY( calc(var(--trig-reverse) / 7) );
	}

	.second_image{
		transform: translateY( calc(var(--trig) / 2) );
	}

	.third_image{
		transform: translateY( calc(var(--trig) / 2) );
	}

</style>
