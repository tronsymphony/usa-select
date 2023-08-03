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
        $zip_zap_content_duo = $row_parent['zip_zap_content_duo']; 


        ?>


<section class="<?= $backgroundBG; ?>" style="background-color:<?php echo $row_parent['background_color']; ?>">
    <?php
        // echo '<pre>';
        // print_r($container_wrapper);
        // echo '</pre>';
        if ($zip_zap_content_duo) {
            foreach ($zip_zap_content_duo as $key => $row) {

                $loop_time = time() + rand(10,100);

                $alignmentRight = $row['alignment'];
                $marginTop = $row['padding-top'];
                $marginBottom = $row['padding-bottom'];
                $spacing_top_mobile = $row['spacing_top_mobile'];
                $spacing_bottom_mobile = $row['spacing_bottom_mobile'];


                $positionOfImages = $row['margin_top_for_images__position'];
                $mobile_image_position = $row['mobile_image_position'];
                $main_image = $row['main_image'];
                $main_imageIMG = $main_image['image'];
                $remove_shadow = $main_image['remove_shadow'];
                $add_strike_line_over_corner = $main_image['add_strike_line_over_corner'];

                $main_imageIMG = Pacific_Helper::generate_image( array(
                'image' => $main_imageIMG,
                'attributes' => array(
                    'class' => "mainImg enable-trig mainImg$loop_time shadow_$remove_shadow "
                )
                ));

                
                $sub_image = $row['sub_image'];
                $sub_imageFRBA = $sub_image['front_or_back'];
                $sub_imageIMG = $sub_image['image'];
                $sub_imagePOS = $sub_image['position'];
                $sub_imageIMG = Pacific_Helper::generate_image( array(
                'image' => $sub_imageIMG,
                'attributes' => array(
                    'class' => "subImg subImg$loop_time  ". $sub_imagePOS . ' ' . $sub_imageFRBA
                )
                ));
                
                if(strpos($sub_imagePOS, 'bottom') === 0 ) {
                    $sub_imagePOS = "sFlex-bottom-parent ";
                } else {
                    $sub_imagePOS = ' ';
                }

                $showBigFirstHeading = $row['loading_headings'];
                $verticaly_aligned = $row['verticaly_aligned'];

                $theContents = $row['thecontent'];
                
                $circleEffects = $row['circle_effects'];
                $showCircles = $circleEffects['show_circles'];

                $enable_vertical_slider = $row['enable_vertical_slider'];
                $background_corner_image = $row['background_corner_image'];

                ?>
                <style>
                    <?php if(!empty($main_image['manual_size'])): ?>
                    @media screen and (min-width:768px){

                    .mainImg<?= $loop_time; ?>{
                        max-width: <?php echo $main_image['manual_size']; ?> !important;
                    }
                }

                    <?php endif; ?>

                    <?php if(!empty($main_image['manual_position_top'])): ?>
                    @media screen and (min-width:768px){
                        .mainImg<?= $loop_time; ?>{
                            top: <?= $main_image['manual_position_top']; ?> !important;
                            left:<?= $main_image['manual_position_left']; ?> !important;
                        }
                    }
                    <?php endif; ?>

                    <?php if(!empty($sub_image['manual_size'])): ?>
                    @media screen and (min-width:768px){

                    .subImg<?= $loop_time; ?>{
                        max-width: <?php echo $sub_image['manual_size']; ?> !important;
                    }
                }

                    <?php endif; ?>

                    <?php if(!empty($sub_image['manual_position_top'])): ?>
                    @media screen and (min-width:768px){
                        .subImg<?= $loop_time; ?>{
                            top: <?= $sub_image['manual_position_top']; ?> !important;
                            left:<?= $sub_image['manual_position_left']; ?> !important;
                        }
                    }
                    <?php endif; ?>
                </style>
                

                        <style>
                            .parent_padding_<?= $loop_time; ?> {
                                --padding-top: <?= $marginTop? $marginTop :""; ?>;
                                --padding-bottom: <?= $marginTop? $marginBottom :""; ?> ;
                            }
                            @media screen and (max-width:768px) {
                                .parent_padding_<?= $loop_time; ?> {
                                    --padding-top: <?= $spacing_top_mobile? $spacing_top_mobile :""; ?>;
                                    --padding-bottom: <?= $spacing_bottom_mobile? $spacing_bottom_mobile :""; ?>;
                                }  
                            }
                        </style>

                    <div class="sFlex-parent parent_padding_<?= $loop_time; ?> <?php echo $row['enable_bg_gradient_shadow'] ? "enable_bg_gradient_shadow_".$row['enable_bg_gradient_shadow'] : ''; ?> sFlex-wrapper lightFont <?php echo ($alignmentRight && $alignmentRight[0] === 'sFlex-reverse') ? 'sFlex-reverse' : ''; ?> fontWeight300 <?php echo $verticaly_aligned . ' ' . $showBigFirstHeading;?>"
                        style="padding-top:var(--padding-top); padding-bottom: var(--padding-bottom);">

                        <?php
                    if($showCircles == 'showTwo'){
                        ?>
                        <div class="circle-effects">
                            <img class="darkCircle1" src="<?= get_template_directory_uri();?>/assets/img/darkCircle1.png" alt="effects" />
                            <img class="goldCircle1" src="<?= get_template_directory_uri();?>/assets/img/goldCircle1.png" alt="effects" />
                            <!-- <span class="shadow-circle"></span> -->
                        </div>
                    <?php
                    } 

                    if ($showCircles == "showOne"){
                    ?>
                        <div class="circle-effects">
                                <img class="darkCircle1" src="<?= get_template_directory_uri();?>/assets/img/darkCircle1.png" alt="effects" />
                                <img class="goldCircle1" src="<?= get_template_directory_uri();?>/assets/img/goldCircle1.png" alt="effects" />
                                <!-- <span class="shadow-circle"></span> -->
                            </div>
                    <?php
                    }
                    ?>

                        <?php if(!empty($background_corner_image)): ?>
                            <div class="corner_image">
                                <img src="<?php echo $background_corner_image; ?>" alt="corner image">
                            </div>
                        <?php endif; ?>

                        <div class="sFlexImg sFlex-1-3 enable-trig <?php echo "strike_$add_strike_line_over_corner"; ?> <?= $sub_imagePOS; ?>" style="margin-top: <?= $positionOfImages; ?>">
                            <?php
                            if($sub_imageIMG){
                                echo $sub_imageIMG;
                            }
                            if($main_imageIMG){
                                echo $main_imageIMG;
                            }
                            ?>
                        </div>

                        

                            <?php if($enable_vertical_slider): ?>

                            <div class="sFlexContent sFlex-2-3 veritcal_slider_container <?php echo "mobile_image_position_$mobile_image_position"; ?>">

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
                                                                'class' => 'h2-font-size'
                                                            ));

                                                            $bigHeader = $theContent['big_heading'];
                                                            $bigHeader = Pacific_Helper::generate_header(array(
                                                                'text' => $bigHeader['title'],
                                                                'tag' => $bigHeader['tag'],
                                                                'class' => 'h4-font-size'
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
                                                            
                                                            if($ctaButtonUrl && $ctaButtonUrl): ?>
                                                            <div class="buttonsWrap">
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
                                                foreach ($theContents as $theContent) { ?>

                                                    <div class="sFlexContent-inner maxwidth-shortcontent swiper-slide">
                                                        <?php
                                                            $smallHeader = $theContent['small_heading'];
                                                            $smallHeader = Pacific_Helper::generate_header(array(
                                                                'text' => $smallHeader['title'],
                                                                'tag' => $smallHeader['tag'],
                                                                'class' => 'h2-font-size'
                                                            ));

                                                            $bigHeader = $theContent['big_heading'];
                                                            $bigHeader = Pacific_Helper::generate_header(array(
                                                                'text' => $bigHeader['title'],
                                                                'tag' => $bigHeader['tag'],
                                                                'class' => 'h4-font-size'
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
                                                    
                                                            if($ctaButtonUrl && $ctaButtonUrl): ?>
                                                            <div class="buttonsWrap">
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

                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

                            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

                                <script>

                                    new Swiper('.swiper', {
                                            direction: 'vertical',
                                            height : window.innerHeight,
                                            mousewheel: {
                                                enabled: true,
                                                sensitivity: 4,
                                            },
                                            autoplay: {
                                                delay: 2000,
                                            },
                                            disableOnInteraction: false,
                                            slidesPerView: 'auto',
                                            speed: 600,
                                            navigation: {
                                                nextEl: '.swiper-button-next',
                                                prevEl: '.swiper-button-prev',
                                            },

                                            
                                        });

                                        let swipeBar = document.querySelector(".swiper").closest(".lightBackground");
                                        console.log(swipeBar)
                                        swipeBar.style.overflow='hidden';


                                </script>
                                <?php else: ?>
                                <div class="sFlexContent sFlex-2-3 <?php echo "mobile_image_position_$mobile_image_position"; ?>">

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
                                        
                                        $big_head_style = $theContent['heading_style'];
                                        $bigHeader = $theContent['big_heading'];

                                        $bigHeader = Pacific_Helper::generate_header(array(
                                            'text' => $bigHeader['title'],
                                            'tag' => $bigHeader['tag'],
                                            'class' => "h2-font-size $big_head_style"
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
                                        
                                
                                if($ctaButtonUrl && $ctaButtonUrl): ?>
                                <div class="buttonsWrap ">
                                    <a href="<?= $ctaButtonUrl; ?>"
                                        class="sButton sButton-icon sButton-right lightFont sButton-fullwidth sButton-right">
                                        <span class="trig_wrapper enable-trig">
                                            <span><?= $ctaButtonTitle; ?></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="33" viewBox="0 0 20 33"
                                                fill="none">
                                                <path d="M2 31L18.108 17.2608C18.5761 16.8616 18.5761 16.1384 18.108 15.7392L2 2"
                                                    stroke="#fff" stroke-width="3" stroke-linecap="round" />
                                            </svg>
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
    .mainImg {
        transform: translateY(calc(var(--trig-reverse) / 5));
    }

    .subImg {
        transform: translateY(calc(var(--trig-reverse) / 3));
    }

    .trig_wrapper {
        transform: translateX(calc(var(--trig) / 6));
        animation-delay: 0.25s;
    }
</style>