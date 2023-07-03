<?php

/**
 * disclosure block Block Template.
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
$id = 'disclosure-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block disclosure';
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
        <div class="content">
            <button class="toggle" onclick="disclosureToggle(event);">
				<?php if(get_field('disclosure')){the_field('title'); } else {_e('Disclosure');} ?>
                <span class="chevron">
                    <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.75523 4.89512C8.62005 5.03459 8.40088 5.03459 8.2657 4.89512L4.59418 1.10704L0.922666 4.89512C0.787484 5.03459 0.568312 5.03459 0.43313 4.89512C0.297949 4.75564 0.297949 4.52951 0.43313 4.39004L4.59418 0.0968919L8.75523 4.39004C8.89041 4.52951 8.89041 4.75564 8.75523 4.89512Z"
                            fill="#313131" />
                    </svg>

                </span>
            </button>
            <div class="text"><?php the_field('text'); ?></div>
        </div>
    </div>
</section>


<script async>
function disclosureToggle(event){
	event.target.classList.toggle('active');
	console.log(event.target.nextElementSibling)
	event.target.nextElementSibling.classList.toggle('active');
}
</script>