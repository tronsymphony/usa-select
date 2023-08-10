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
$id = 'sliding_calculator-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block sliding_calculator';
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
    --gradient: <?= $block_styling['gradient']? $block_styling['gradient'] : '#fff' ?>;
    ">
    <div class="container">


        <div class="calculator_slider">
            <span class="amount left">$100,000</span>
            <div class="calculator_slider_slide">
                <div class="range-slider">
                    <span id="rs-bullet" class="rs-label" data-position="0">$100,000</span>
                    <input id="rs-range-line" class="slider-progress rs-range" type="range" value="0" step="30" min="0" max="60">
                </div>
            </div>
            <span class="amount right">> $200,000+</span>
        </div>

        <div class="mobile_slide_buttons">
            <button class="button_track btn_active">$100K-$125K</button>
            <button class="button_track">Tier 1</button>
            <button class="button_track">Tier 2</button>
        </div>

        <div class="sliding_calculator_columns">

            <?php 
            $column_data = get_field('column_data');
            if( $column_data ) {
                
                foreach( $column_data as $row ) {
                    $column_type = $row['column_type'];
                    if($column_type != 'info'){continue;}
                    echo "<div class=\"sliding_calculator_column $column_type\">";

                    $inner_rows = $row['rows'];
                    if( $inner_rows ) {
                        foreach( $inner_rows as $key=>$row ) {
                            $row_type = $row['row_type'];
                            $row_text = $row['row_text'];
                            $row_textarea = $row['row_textarea'];
                            $row_header_title = $row['row_header_title'];
                            $row_link = $row['row_link'];
                            
                            
                            // row_header
                            if($key == 0){
                                echo "<div class=\"row_header\">";
                            }

                            echo "<div class=\"row_text row_$row_type \">";
                                echo wpautop( $row_text );
                                echo wpautop( $row_header_title );
                                echo wpautop( $row_textarea );

                                if(!empty($row_link)){
                                    $uUrl = $row_link['url'];
                                    $uTitle = $row_link['title'];
                                    echo "<a href=\"$uUrl\">$uTitle"; 
                                    ?>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_177_3550)">
<path d="M1.274 14.9992C0.937508 14.9959 0.615715 14.8608 0.377579 14.6231C0.139443 14.3853 0.0039051 14.0637 0 13.7272V1.27324C0.00338555 0.936404 0.138701 0.614322 0.376892 0.376131C0.615084 0.137939 0.937166 0.00262415 1.274 -0.000761402H6.325C6.39128 -0.00244499 6.45719 0.00956757 6.51862 0.0345169C6.58004 0.0594663 6.63567 0.0968201 6.68201 0.144243C6.72924 0.191296 6.76636 0.247488 6.79112 0.309389C6.81588 0.371289 6.82775 0.437597 6.826 0.504243C6.82798 0.570322 6.8162 0.63609 6.79141 0.697374C6.76662 0.758658 6.72937 0.81411 6.68201 0.860231C6.63505 0.90655 6.57923 0.942921 6.51788 0.967149C6.45654 0.991378 6.39093 1.00297 6.325 1.00124H1.274C1.20341 1.00593 1.13691 1.03609 1.08688 1.08612C1.03685 1.13615 1.00669 1.20264 1.002 1.27324V13.7282C1.00669 13.7988 1.03685 13.8653 1.08688 13.9154C1.13691 13.9654 1.20341 13.9956 1.274 14.0002H13.729C13.7996 13.9956 13.8661 13.9654 13.9161 13.9154C13.9662 13.8653 13.9963 13.7988 14.001 13.7282V8.67723C13.9994 8.61096 14.0114 8.54508 14.0364 8.48366C14.0613 8.42224 14.0986 8.36661 14.146 8.32024C14.1931 8.27306 14.2493 8.23596 14.3112 8.2112C14.3731 8.18644 14.4394 8.17455 14.506 8.17624C14.5721 8.17426 14.6378 8.18604 14.6991 8.21083C14.7604 8.23562 14.8159 8.27288 14.862 8.32024C14.9083 8.36719 14.9447 8.42302 14.9689 8.48436C14.9931 8.54571 15.0047 8.6113 15.003 8.67723V13.7282C14.9988 14.0647 14.863 14.3862 14.6247 14.6238C14.3864 14.8613 14.0645 14.9961 13.728 14.9992H1.274ZM5.04401 9.95424C4.95276 9.86217 4.89863 9.73969 4.892 9.61023C4.88876 9.54435 4.90006 9.47859 4.92513 9.41757C4.95019 9.35656 4.98839 9.30181 5.037 9.25723L13.294 0.999239H9.108C9.04173 1.00086 8.97583 0.98883 8.91441 0.963884C8.85299 0.938938 8.79738 0.901609 8.75101 0.854234C8.70378 0.807181 8.66664 0.750989 8.64188 0.689088C8.61712 0.627188 8.60524 0.56088 8.60699 0.494234C8.60502 0.428155 8.6168 0.362388 8.64159 0.301103C8.66638 0.239819 8.70365 0.184368 8.75101 0.138246C8.79796 0.0919269 8.85377 0.0555562 8.91512 0.0313278C8.97646 0.00709948 9.04207 -0.00449426 9.108 -0.0027603H14.365C14.449 -0.00467426 14.5326 0.0104651 14.6106 0.0417496C14.6887 0.073034 14.7595 0.119818 14.819 0.179262C14.8784 0.238706 14.9252 0.309577 14.9565 0.387605C14.9878 0.465634 15.0029 0.549197 15.001 0.633241V5.89024C15.0027 5.95652 14.9907 6.02244 14.9657 6.08386C14.9408 6.14529 14.9034 6.20091 14.856 6.24724C14.8089 6.29447 14.7527 6.33159 14.6908 6.35636C14.6289 6.38112 14.5626 6.39299 14.496 6.39124C14.4299 6.39321 14.3642 6.38143 14.3029 6.35665C14.2416 6.33186 14.1861 6.2946 14.14 6.24724C14.0937 6.20029 14.0573 6.14446 14.0331 6.08312C14.0089 6.02177 13.9973 5.95618 13.999 5.89024V1.71724L5.73399 9.98224C5.68984 10.0263 5.63696 10.0606 5.57875 10.083C5.52054 10.1054 5.45829 10.1154 5.396 10.1122C5.32973 10.1114 5.26434 10.097 5.20381 10.07C5.14329 10.043 5.08891 10.003 5.04401 9.95424Z" fill="black"/>
</g>
<defs>
<clipPath id="clip0_177_3550">
<rect width="15" height="15" fill="white"/>
</clipPath>
</defs>
</svg>

                                    <?php
                                    echo "</a>";
                                }
                                
                            echo '</div>';

                            if($key == 1){
                                echo "</div>";
                            }
                        }
                    }
                        
                    echo '</div>';
                }
                
            }
            ?>


         

            <div class="overflow_wrapper">
            <div class="column_slider_overflow" id="slide_overflow_container">


                <?php 
                $column_data = get_field('column_data');
                if( $column_data ) {
                    
                    foreach( $column_data as $row ) {
                        $column_type = $row['column_type'];
                        if($column_type == 'info'){ continue; }

                        echo "<div class=\"sliding_calculator_column $column_type\">";
                        $inner_rows = $row['rows'];
                        if( $inner_rows ) {
                            foreach( $inner_rows as $key=>$row ) {
                                $row_type = $row['row_type'];
                                $row_text = $row['row_text'];
                                $row_textarea = $row['row_textarea'];
                                $row_header_title = $row['row_header_title'];

                                
                                // row_header
                                if($key == 0){
                                    echo "<div class=\"row_header\">";
                                }
                                echo "<div class=\"row_text row_$row_type \">";
                                    echo wpautop( $row_text );
                                    echo wpautop( $row_header_title );
                                    echo wpautop( $row_textarea );

                                echo '</div>';
                                if($key == 1){
                                    echo "</div>";
                                }
                            }
                        }
                            
                        echo '</div>';
                    }
                    
                }
                ?>
                </div>
            </div>
        </div>


    </div>
</section>


<script>

for (let e of document.querySelectorAll('input[type="range"].slider-progress')) {
  e.style.setProperty('--value', e.value);
  e.style.setProperty('--min', e.min == '' ? '0' : e.min);
  e.style.setProperty('--max', e.max == '' ? '100' : e.max);
  e.addEventListener('input', () => e.style.setProperty('--value', e.value));
}

let rangeSlider = document.getElementById("rs-range-line");
let rangeBullet = document.getElementById("rs-bullet");
let box = document.querySelector('.sliding_calculator_column.info');
let widthBox = box.offsetWidth;

rangeSlider.addEventListener("input", showSliderValue, false);

let slide_overflow_container = document.getElementById("slide_overflow_container");
let slideCount = 0;
let oldValue = 0;
let buttonsTrack = document.querySelectorAll('.button_track');
            
Array.from(buttonsTrack).forEach(function(button,index) {
    button.addEventListener("click", function(event){

        let rangeIndex = 0;
        switch (index) {
            case 0:
                rangeIndex = 0;
                break;
            case 1:
                rangeIndex = 30;
                break;
            case 2:
                rangeIndex = 60;
                break;
            default:
                break;
        }

        rangeSlider.value = rangeIndex;

        Array.from(buttonsTrack).forEach(function(button,index) {
            button.classList.remove('btn_active');
            button.classList.remove('btn_active_orange');
        })

        if(index == 2){
            event.target.classList.add('btn_active_orange');
        }
        event.target.classList.add('btn_active');
        showSliderValue(index)

    });
});


function showSliderValue(indexValue) {
    let bulletPosition = (rangeSlider.value / rangeSlider.max);
    let newValue = rangeSlider.value;

    if(newValue > oldValue){
        slideCount++;
    } else {
        slideCount--;
    }

    if(indexValue === parseInt(indexValue, 10)){
        slideCount = indexValue;
    }

    transformValue = slideCount * widthBox + (16 * slideCount);
    slide_overflow_container.style.transform = "translateX(-"+transformValue+"px)";

    rangeBullet.style.left = (bulletPosition * 10) + "0%";

    rangeBullet.dataset.position = bulletPosition * 10;

    let rangeValue = '';

    switch (rangeSlider.value) {
        case '0':
            rangeValue = '$100,000';
            break;
        case '30':
            rangeValue = '$125,000';
            break;
        case '60':
            rangeValue = '$200,000';
            break;
        default:
            break;
    }

    rangeBullet.innerHTML = rangeValue;
    oldValue = newValue;
}
</script>