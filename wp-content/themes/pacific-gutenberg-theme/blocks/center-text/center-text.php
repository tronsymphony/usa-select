<?php

/**
 * text block Block Template.
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
$id = 'center-text-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block center-text';
if (!empty($block['className'])) :
	$className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
	$className .= ' align' . $block['align'];
endif;

$className = apply_filters( 'pacific_block_class', $className, $block, $post_id );

$block_styling = get_field('styling'); 



?>
<section id="<?php echo esc_attr($id); ?>"
    class="<?php echo esc_attr($className); echo ' styling-' .get_field('light_style'); ?> border_<?php the_field('remove_border_top'); ?>"
    style="
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
        <div class="content">
            <h2 class="title"><?php the_field('title'); ?></h2>
            <?php if(get_field('text')): ?>
            <div class="text fadeout_<?php the_field('disable_fade_out'); ?>  "><?php the_field('text'); ?>
            <?php endif; ?>
            
            <div class="text_slider">

            <div class="swiper text_slider_init">
                <div class="swiper-wrapper">
                        <?php 
                        if( have_rows('vertical_text_slide') ):
                            while( have_rows('vertical_text_slide') ) : the_row();
                                echo '<div class="swiper-slide">';
                                    the_sub_field('content');
                                echo '</div>';
                            endwhile;
                        endif;

                        ?>
                        <?php 
                        if( have_rows('vertical_text_slide') ):
                            while( have_rows('vertical_text_slide') ) : the_row();
                                echo '<div class="swiper-slide">';
                                    the_sub_field('content');
                                echo '</div>';
                            endwhile;
                        endif;

                        ?>
                        <?php 
                        if( have_rows('vertical_text_slide') ):
                            while( have_rows('vertical_text_slide') ) : the_row();
                                echo '<div class="swiper-slide">';
                                    the_sub_field('content');
                                echo '</div>';
                            endwhile;
                        endif;

                        ?>
                    </div>
                </div>
            </div>

                <div class="links">
                    <?php
				if( have_rows('links') ):
				while( have_rows('links') ) : the_row();
					$link = get_sub_field('link');
                    if(!empty($link)):
					echo '<a href="'.$link['title'].'">';
					echo $link['title'];
					?>
                    <span class="svg">
                        <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.146447 13.1464C-0.0488156 12.9512 -0.0488156 12.6346 0.146447 12.4393L5.44975 7.13604L0.146446 1.83274C-0.0488163 1.63748 -0.0488167 1.32089 0.146446 1.12563C0.341708 0.93037 0.65829 0.93037 0.853552 1.12563L6.86396 7.13604L0.853553 13.1464C0.658291 13.3417 0.341709 13.3417 0.146447 13.1464Z"
                                fill="#F1D593" />
                        </svg>

                    </span>
                    <?php
					echo '</a>';
                    endif;
				endwhile;
				endif;
				?>
                </div>
                <?php $linkB = get_field('bottom_link'); ?>
                <?php if(!empty($linkB)): ?>
                <div class="bottom_link center-trig_wrapper enable-trig">
                    <a href="<?= $linkB['url']; ?>"><?= $linkB['title']; ?>
                        <span class="chevron">
                            <svg width="5" height="10" viewBox="0 0 5 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.10464 9.25523C-0.0348334 9.12005 -0.0348334 8.90088 0.10464 8.7657L3.89271 5.09418L0.104639 1.42267C-0.034834 1.28748 -0.0348342 1.06831 0.104639 0.93313C0.244112 0.797949 0.470242 0.797949 0.609715 0.93313L4.90286 5.09418L0.609716 9.25523C0.470243 9.39041 0.244113 9.39041 0.10464 9.25523Z"
                                    fill="#313131" />
                            </svg>

                        </span>
                    </a>
                </div>
                <?php endif; ?>

            </div>

        </div>
        <?php if(!empty(get_field('float_image'))): ?>
        <img class="enable-trig float float_1 position-<?php the_field('float_1_image_positon'); ?> float_position_mobile-<?php the_field('float_position_mobile'); ?> position-<?php the_field('float_1_image_positon_top'); ?> "
            src="<?php the_field('float_image'); ?>" alt="float">
        <?php endif; ?>
        <?php if(!empty(get_field('float_image_2'))): ?>
        <img class="enable-trig float float_2 position-<?php the_field('float_2_image_position'); ?> float_position_mobile-<?php the_field('float_position_mobile'); ?> position-<?php the_field('float_2_image_positon_top'); ?>"
            src="<?php the_field('float_image_2'); ?>" alt="float 2">
        <?php endif; ?>
    </div>


    <?php if(!empty(get_field('corner_image'))): ?>
        <img class="enable-trig corner_image" src="<?php the_field('corner_image'); ?>" alt="corner_image">
    <?php endif; ?>
    


</section>

<style>
.center-trig_wrapper {
    transform: translateX(calc(var(--trig) / 5));
    animation-delay: 0.25s;
}

.corner_image {
    transform: translateX(calc(var(--trig) / 5));
    animation-delay: 0.25s;
}


</style>


				
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>

            new Swiper('.text_slider_init', {
                    // Optional parameters
                    direction: 'vertical',
                    autoplay: {
                        height : window.innerHeight,
                    delay: 5000,
                        disableOnInteraction: false,
                    },
                    slidesPerView: 'auto',
                    // slideToClickedSlide: true,
                    // watchOverflow: true,
                    // centeredSlides: true,
                
                    speed: 600,

                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },

                    
                });

        </script>

 