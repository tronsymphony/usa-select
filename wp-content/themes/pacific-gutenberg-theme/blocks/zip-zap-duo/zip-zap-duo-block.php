<?php

/**
 * zip-zap-block Block Template.
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
$id = 'zip-zap-block' . $block['id'];
if (!empty($block['anchor'])) :
    $id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block zip-zap-block';
if (!empty($block['className'])) :
    $className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
    $className .= ' align' . $block['align'];
endif;

$className = apply_filters( 'pacific_block_class', $className, $block, $post_id );


$container_wrapper = get_field('container_wrapper2');

// // Retrieve values for the background radio button field.
// $background = $container_wrapper['background'];

// // Retrieve values for the zip_zap_content_duo repeater field.
// $zip_zap_content_duo = $container_wrapper['zip_zap_content_duo'];


if ($container_wrapper) {
    foreach ($container_wrapper as $row_parent ) {
            
        $backgroundBG = $row_parent['background'];
        $zip_zap_content_duo = $row_parent['zip_zap_content_duo']; ?>


<section class="<?= $backgroundBG; ?>" style="background-color:<?php echo $row_parent['background_color']; ?>">
    <?php

        // echo '<pre>';
        // print_r($container_wrapper);
        // echo '</pre>';
        if ($zip_zap_content_duo) {
            foreach ($zip_zap_content_duo as $row) {

                $alignmentRight = $row['alignment'];
                $marginTop = $row['padding-top'];
                $marginBottom = $row['padding-bottom'];
                $positionOfImages = $row['margin_top_for_images__position'];
                $main_image = $row['main_image'];
                $main_imageIMG = $main_image['image'];
                $main_imageIMG = Pacific_Helper::generate_image( array(
                'image' => $main_imageIMG,
                'attributes' => array(
                    'class' => 'mainImg enable-trig'
                )
                ));

                
                $sub_image = $row['sub_image'];
                $sub_imageFRBA = $sub_image['front_or_back'];
                $sub_imageIMG = $sub_image['image'];
                $sub_imagePOS = $sub_image['position'];
                $sub_imageIMG = Pacific_Helper::generate_image( array(
                'image' => $sub_imageIMG,
                'attributes' => array(
                    'class' => 'subImg enable-trig '. $sub_imagePOS . ' ' . $sub_imageFRBA
                )
                ));
                
                if(strpos($sub_imagePOS, 'bottom') === 0 ) {
                    $sub_imagePOS = 'sFlex-bottom-parent';
                } else {
                    $sub_imagePOS = ' ';
                }

                $showBigFirstHeading = $row['loading_headings'];
                $verticaly_aligned = $row['verticaly_aligned'];
                // $smallHeader = $row['small_heading'];
                // $smallHeader = Pacific_Helper::generate_header(array(
                //     'text' => $smallHeader['title'],
                //     'tag' => $smallHeader['tag'],
                //     'class' => 'h4-font-size'
                // ));

                // $bigHeader = $row['big_heading'];
                // $bigHeader = Pacific_Helper::generate_header(array(
                //     'text' => $bigHeader['title'],
                //     'tag' => $bigHeader['tag'],
                //     'class' => 'h2-font-size'
                // ));

                $theContents = $row['thecontent'];
                
                $circleEffects = $row['circle_effects'];
                $showCircles = $circleEffects['show_circles'];
                // $graphic_effects = $circleEffects['graphic_effects'];
                // $effect_desktop_top = $graphic_effects[0]['top'];
                // $effect_desktop_right = $graphic_effects[0]['right'];
                // $effect_desktop_bottom = $graphic_effects[0]['bottom'];
                // $effect_desktop_left = $graphic_effects[0]['left'];

                // $effect_mobile_top = $graphic_effects[0]['top'];
                // $effect_mobile_right = $graphic_effects[0]['right'];
                // $effect_mobile_bottom = $graphic_effects[0]['bottom'];
                // $effect_mobile_left = $graphic_effects[0]['left'];

                $enable_vertical_slider = $row['enable_vertical_slider'];

                if($enable_vertical_slider){
                    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <?php
                }



                if ($alignmentRight){
                
                    if($showCircles == 'showTwo'){
                        ?>
    <div class="circle-effects">
        <img class="darkCircle1" src="<?= get_template_directory_uri();?>/assets/img/darkCircle1.png" alt="effects" />
        <img class="goldCircle1" src="<?= get_template_directory_uri();?>/assets/img/goldCircle1.png" alt="effects" />
        <span class="shadow-circle"></span>
    </div>
    <?
                    } elseif ($showCircles == 'showOne'){
                    ?>
    <div class="circle-effect-singl-small">
        <img class="goldCircle-solo" src="<?= get_template_directory_uri();?>/assets/img/goldCircle1.png"
            alt="effects" />
    </div>
    <?php
                    } else { 
                        
                    }

                } 
            
                ?>


    <div class="sFlex-parent sFlex-wrapper lightFont <?php echo ($alignmentRight && $alignmentRight[0] === 'sFlex-reverse') ? 'sFlex-reverse' : ''; ?> fontWeight300 <?php echo $verticaly_aligned . ' ' . $showBigFirstHeading;?>"
        style="padding-top:<?= $marginTop; ?>; padding-bottom:<?= $marginBottom; ?>;">

        <div class="sFlexImg sFlex-1-3 <?= $sub_imagePOS; ?>" style="margin-top: <?= $positionOfImages; ?>">
            <?php
                        if($sub_imageIMG){
                            echo $sub_imageIMG;
                        }
                        if($main_imageIMG){
                            echo $main_imageIMG;
                        }
                        ?>
        </div>


        <?php    if($enable_vertical_slider): ?>





        <div class="sFlexContent sFlex-2-3">

            <!-- Slider main container -->
            <div class="swiper flexContentSlider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">




                    <?php 
                        if ($theContents) {
                            foreach ($theContents as $theContent) { ?>

                    <div class="sFlexContent-inner maxwidth-shortcontent swiper-slide">
                        <?php
                                        $smallHeader = $theContent['small_heading'];
                                        $smallHeader = Pacific_Helper::generate_header(array(
                                            'text' => $smallHeader['title'],
                                            'tag' => $smallHeader['tag'],
                                            'class' => 'h4-font-size'
                                        ));

                                        $bigHeader = $theContent['big_heading'];
                                        $bigHeader = Pacific_Helper::generate_header(array(
                                            'text' => $bigHeader['title'],
                                            'tag' => $bigHeader['tag'],
                                            'class' => 'h2-font-size'
                                        ));
                                        $defaultContent = $theContent['content'];
                                        $ctaButton = $theContent['cta_button'];
                                        $ctaButtonTitle = $ctaButton['title'];
                                        $ctaButtonUrl = $ctaButton['link'];

                                        if ($smallHeader) {
                                            echo $smallHeader;
                                        }

                                        if ($bigHeader) {
                                            echo $bigHeader;
                                        }

                                        if ($defaultContent) {
                                            echo $defaultContent;
                                        }
                                        
                                        echo "<br>"; // Add a line break between each item
                                
                        if($ctaButtonUrl && $ctaButtonUrl): ?>
                        <div class="buttonsWrap ">
                            <a href="<?= $ctaButtonUrl; ?>"
                                class=" sButton sButton-icon sButton-right lightFont sButton-fullwidth sButton-right">
                                <span class="trig_wrapper enable-trig">
                                <span><?= $ctaButtonTitle; ?></span>
                                <img src="<?= get_template_directory_uri();?>/assets/icons/arrow_right_white.svg"
                                    alt="arrow right" />
                                </span>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php
                            }
                        } ?>

                </div>

            </div>
        </div>








        <script>


(function() {

'use strict';

// breakpoint where swiper will be destroyed
// and switches to a dual-column layout
const breakpoint = window.matchMedia( '(min-width:768px)' );

// keep track of swiper instances to destroy later
let mySwiper;


const breakpointChecker = function() {

  // if larger viewport and multi-row layout needed
  if ( breakpoint.matches === true ) {

   

    return enableSwiper();

    // else if a small viewport and single column layout needed
    } else if ( breakpoint.matches === false ) {

      // fire small viewport version of swiper
      // clean up old instances and inline styles when available
    if ( mySwiper !== undefined ) mySwiper.destroy( true, true );

// or/and do nothing
return;

    }

};

//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////

const enableSwiper = function() {

        mySwiper  = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: false,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            mousewheel: {
                releaseOnEdges: true,
            },
            speed: 600,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });

};

// keep an eye on viewport size changes
breakpoint.addListener(breakpointChecker);

// kickstart
breakpointChecker();



})(); /* IIFE end */

        
        </script>
        <?php else: ?>
        <div class="sFlexContent sFlex-2-3">

            <?php 
                        if ($theContents) {
                            foreach ($theContents as $theContent) { ?>
            <div class="sFlexContent-inner maxwidth-shortcontent">
                <?php
                                        $smallHeader = $theContent['small_heading'];
                                        $smallHeader = Pacific_Helper::generate_header(array(
                                            'text' => $smallHeader['title'],
                                            'tag' => $smallHeader['tag'],
                                            'class' => 'h4-font-size'
                                        ));

                                        $bigHeader = $theContent['big_heading'];
                                        $bigHeader = Pacific_Helper::generate_header(array(
                                            'text' => $bigHeader['title'],
                                            'tag' => $bigHeader['tag'],
                                            'class' => 'h2-font-size'
                                        ));
                                        $defaultContent = $theContent['content'];
                                        $ctaButton = $theContent['cta_button'];
                                        $ctaButtonTitle = $ctaButton['title'];
                                        $ctaButtonUrl = $ctaButton['link'];

                                        if ($smallHeader) {
                                            echo $smallHeader;
                                        }

                                        if ($bigHeader) {
                                            echo $bigHeader;
                                        }

                                        if ($defaultContent) {
                                            echo $defaultContent;
                                        }
                                        
                                        echo "<br>"; // Add a line break between each item
                                
                                if($ctaButtonUrl && $ctaButtonUrl): ?>
                <div class="buttonsWrap ">
                    <a href="<?= $ctaButtonUrl; ?>"
                        class="sButton sButton-icon sButton-right lightFont sButton-fullwidth sButton-right">
                        <span class="trig_wrapper enable-trig">
                                <span><?= $ctaButtonTitle; ?></span>
                                <img src="<?= get_template_directory_uri();?>/assets/icons/arrow_right_white.svg"
                                    alt="arrow right" />
                                </span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <?php
                            }
                        } ?>
        </div>
        <?php endif; ?>




    </div>

    <?php 
            }
        } ?>
</section>
<?php 
    }
}
?>







<style>

.mainImg{ 
    transform: translateY( calc(var(--trig-reverse) / 4) );
}
.subImg{
    transform: translateY( calc(var(--trig-reverse) / 2) );
}

.trig_wrapper {
    transform: translateX( calc(var(--trig) / 5) );
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

