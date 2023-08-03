<?php

/**
 * Team block Block Template.
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
$id = 'text-columns-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block text-columns';
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
	<div class="float_div enable-trig back_image_position<?php the_field('back_image_position'); ?>"><img src="<?php the_field('back_image'); ?>" alt="" class="float"></div>
    <div class="container">
        <?php
		
		// Check rows existexists.
		if( have_rows('columns') ):

			?>
			<div class="columns" style="border-top:1px solid<?php echo get_field('border_color')?get_field('border_color'):'#E0E0E0'; ?>;">
				<?php
				// Loop through rows.
			while( have_rows('columns') ) : the_row();

			echo '<div class="column">';
			
			echo '<span class="title title_style_'.get_sub_field('title_style').'">'.get_sub_field('title').'</span>';

			the_sub_field('content');
			// Do something...

			echo '</div>';

		// End loop.
		endwhile;
				?>
			</div>
			<?php

		// No value.
		else :
			// Do something...
		endif;
		?>
    </div>
</section>

<style>

.float_div{ 
    transform: translateY( calc(var(--trig-reverse) / 4) );
}
</style>


