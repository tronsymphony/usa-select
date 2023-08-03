<?php

/**
 * dual-tarjeta images Block Template.
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
$id = 'dual-tarjeta-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block dual-tarjeta';
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

        <?php if(get_field('float_image')): ?>
            <div class="image_float">
                <img decoding="async" src="<?php the_field('float_image'); ?>" alt="floating image">
            </div>
        <?php endif; ?>

        <h2 class="title"><?php the_field('title'); ?> </h2>

        <?php

		// Check rows existexists.
		if( have_rows('columns') ):

			echo '<div class="columns">';
			// Loop through rows.
			while( have_rows('columns') ) : the_row();
				echo '<div class="column">';

				?>
                <h3 class="dual_title"><?php the_sub_field('title'); ?></h3>
                <div class="dual_card_image"><img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('title'); ?>"></div>
                <div class="dual_content"><?php the_sub_field('content'); ?></div>
                <div class="dual_featured_content"><?php the_sub_field('featured_content'); ?></div>
                <span class="dual_link trig_wrapper enable-trig">
                    
                    <a href="<?php the_sub_field('apply_link'); ?>">Apply now
                        <span class="chev">
                            <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.104884 9.25523C-0.0345893 9.12005 -0.0345893 8.90088 0.104884 8.7657L3.89296 5.09418L0.104883 1.42267C-0.0345898 1.28748 -0.0345901 1.06831 0.104883 0.93313C0.244356 0.797949 0.470486 0.797949 0.609959 0.93313L4.90311 5.09418L0.60996 9.25523C0.470487 9.39041 0.244357 9.39041 0.104884 9.25523Z"
                                    fill="#313131" />
                            </svg>

                        </span>
                    </a>
                </span>

               

                <?php
				echo '</div>';
			endwhile;
			echo '</div>';
		endif;
		?>


    </div>
</section>





<style>
.first_image {
    transform: translateY(calc(var(--trig-reverse) / 7));
}

.second_image {
    transform: translateY(calc(var(--trig) / 2));
}

.trig_wrapper {
    transform: translateX(calc(var(--trig) / 5));
    animation-delay: 0.25s;
}


/* //var(--trig)  */
/* Percentage */
/* //var(--trig-reverse)  */
/* Reverse percentage */
/* //var(--trig-px)  */
/* Pixels */
/* //var(--trig-px-reverse)  */
/* Reverse pixels */
/* //var(--trig-deg)  */
/* Degrees */
/* //var(--trig-deg-reverse)  */
/* Reverse degrees */
</style>