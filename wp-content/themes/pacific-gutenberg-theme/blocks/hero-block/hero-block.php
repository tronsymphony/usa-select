<?php

/**
 * Hero block Block Template.
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
$id = 'hero-block-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block hero-block';
if (!empty($block['className'])) :
	$className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
	$className .= ' align' . $block['align'];
endif;

$className = apply_filters( 'pacific_block_class', $className, $block, $post_id );

// Load values and assing defaults.
$breadcrumb = get_field('show_breadcrumb');
$preheader = get_field('preheader');
$header = get_field('header');
$text = get_field('text');
$padding_top = get_field('padding_top');
$padding_bottom = get_field('padding_bottom');

$goldenline = get_field('golden_text_line');
$background = get_field('background');

$preheader = Pacific_Helper::generate_paragraph(array(
	'text'  => $preheader['title'],
	'class' => 'h6-font-size fontWeight300 pre-header'
));

$headerText = Pacific_Helper::generate_header(array(
	'text' => $header['title'],
	'tag' => $header['tag'],
	'class' => 'h1-font-size header_mwidth'
));

$textReg = $text['normal_text'];


if($background == 'lightBackground'){
	$background = ' lightBackground darkFont';
 
}
else if($background == 'heavyDarkBackground'){
	$background = ' heavyDarkBackground lightFont ';
}
else {
	$background = ' darkBackground lightFont ';
}

if(!empty($goldenline)){
	if(!empty($goldenline['url'])){
		$goldenline = Pacific_Helper::generate_acf_link(array(
			'link'            => $goldenline['url'],
			'class'           => 'goldenLink h6-font-size fontWeight300',
			'link_attributes' => array(
				'title' => $goldenline['text']
			)
		));
	} else {
		$goldenline = Pacific_Helper::generate_paragraph(array(
			'text'  => $goldenline['text'],
			'class' => 'goldenLink h6-font-size fontWeight300'
		));
	}
}

$block_image = get_field('block_image');
$block_location = get_field('block_location');
$block_location_vertical = get_field('block_location_vertical');
$background_image = get_field('background_image');
?>

<section 
id="<?php echo esc_attr($id); ?>" 
class="
	<?php echo esc_attr($className); 
	echo $background; 
	// block location for image
	echo ' image_location' . $block_location; 
	echo ' vertical_' . $block_location_vertical; 
	?> 
	hero-Parent selectedDesign center-align headingRecife-Parent
">

	<?php if($background_image){ echo "<div class='hero_background_image_container'><img src='$background_image' class='hero_background_image'></div>";} ?>
	
	<?php if($breadcrumb): ?>
		<div class="breadcrumbs-parent">
			<?php 
			// breadcrumbs
			if ( function_exists('yoast_breadcrumb') ) { 
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			} 
			?>
		</div>
	<?php endif;?>

	<div class="container">
		<div class="hero-Flex">
			<?php
			// pre head title
			if($preheader){
				echo $preheader;
			}
			// header title
			if($headerText){
				echo $headerText;
			}
			// paragraph content
			if($textReg){
				echo '<div class="text text_mwidth">';
					echo $textReg;
				echo '<div>';
			}
			// gold text
			if(!empty($goldenline)){
				echo $goldenline;
			}
			?>
		</div>

		<?php 
			// floating image
			if(!empty($block_image)): ?>
			<div class="bg_image">
				<img src="<?= $block_image; ?>" alt="background image">
			</div>
		<?php endif; ?>

	</div>
</section>

<style>
	@media screen and (min-width:768px) {
		<?php 
		// set max width in acf	
		if($header['max_width']): ?>
			.header_mwidth{
				max-width:<?php echo $header['max_width']; ?>px;
			}
		<?php endif; ?>

		<?php if($text['max_width']): ?>
			.hero-Flex .text_mwidth{
				max-width:<?php echo $text['max_width']; ?>px;
			}
		<?php endif; ?>
		
		<?php // set padding in acf ?>
		section.hero-Parent .hero-Flex{
			<?php if($padding_top): ?>
				padding-top:<?= $padding_top; ?>px;
			<?php endif; ?>

			<?php if($padding_bottom): ?>
				padding-bottom:<?= $padding_bottom; ?>px;
			<?php endif; ?>
		}
	}
</style>