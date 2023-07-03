<?php

/**
 * Main-Heading-block Template.
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
$id = 'main-heading-block' . $block['id'];
if (!empty($block['anchor'])) :
    $id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block main-heading-block';
if (!empty($block['className'])) :
    $className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
    $className .= ' align' . $block['align'];
endif;

$className = apply_filters( 'pacific_block_class', $className, $block, $post_id );



$background = get_field('background');
$theHeading = get_field('header');
$theHeading = Pacific_Helper::generate_header(array(
    'text' => $theHeading['title'],
    'tag' => $theHeading['tag'],
    'class' => 'h1-font-size'
));

?>

<div class="main-heading-parent headingRecife-Parent <?= $background; ?>">
    <div class="main-heading-inner center-align lightFont">
        <?= $theHeading; ?>
    </div>
</div>