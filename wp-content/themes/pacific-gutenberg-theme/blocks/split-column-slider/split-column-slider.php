<?php

/**
 * split-column-slider Block Template.
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
$id = 'split-column-slider-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block split-column-slider';
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
            <div class="image_blocks">
                <img src="<?php the_field('first_image'); ?>" class="mainimage" alt="main image">
                <img src="<?php the_field('sub_image'); ?>" class="subimage" alt="sub image">
            </div>

            <div class="repeater">
                <div class="copy"><?php the_field('copy'); ?></div>

                <!-- Slider main container -->
                <div class="swiper columnslide_vertical">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php
                    if( have_rows('slide_options') ):
                        while( have_rows('slide_options') ) : the_row();
                            $content = get_sub_field('content');
                             
                            echo "<div class=\"swiper-slide\">$content</div>";
                        endwhile;
                    endif;
                    ?>


                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<style>

</style>
<script defer>
const swiper = new Swiper('.columnslide_vertical', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
    slidesPerView: 'auto',
    autoHeight:true,
    spaceBetween: 24,
    freeMode: true,
    mousewheel: true,

});
</script>