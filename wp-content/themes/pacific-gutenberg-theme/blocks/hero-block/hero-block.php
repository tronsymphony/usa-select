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

// Build the breadcrumb trail dynamically based on the page hierarchy
// function generate_breadcrumbs() {
//     $breadcrumbs = array();
//     $current_page_id = get_the_ID();

//     while ($current_page_id) {
//         $page = get_post($current_page_id);
//         $breadcrumbs[$page->post_title] = get_permalink($page->ID);
//         $current_page_id = $page->post_parent;
//     }

//     krsort($breadcrumbs); // Sort the breadcrumbs in descending order

//     $breadcrumb_html = '<ul class="breadcrumbs">';
//     foreach ($breadcrumbs as $label => $url) {
//         $breadcrumb_html .= '<li><a href="' . $url . '">' . $label . '</a></li>';
//         $breadcrumb_html .= '<li class="separator">></li>';
//     }
//     $breadcrumb_html .= '</ul>';

//     return $breadcrumb_html;
// }

$categories = get_the_terms(get_the_ID(), 'category-for-page');

// Initialize the breadcrumb trail
$breadcrumbs = array();

// Add the "Home" link as the first element
$breadcrumbs[] = '<li><a href="' . home_url() . '">Home</a></li>';

// Iterate through each category and add them to the breadcrumb trail
// . get_term_link($category) .
if ($categories && !is_wp_error($categories)) {
    foreach ($categories as $category) {
        if ($category->slug !== 'who-do-we-serve') {
            $breadcrumbs[] = '<li><span>' . $category->name . '</span></li>';
        } else {
            $breadcrumbs[] = '<li>' . $category->name . '</li>';
        }
    }
}

// Add the current page as the last element (without a link)
$breadcrumbs[] = '<li>' . get_the_title() . '</li>';

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

$goldenline = get_field('golden_text_line');
$background = get_field('background');

$preheader = Pacific_Helper::generate_paragraph(array(
	'text'  => $preheader['title'],
	'class' => 'h6-font-size fontWeight300'
));

$header = Pacific_Helper::generate_header(array(
	'text' => $header['title'],
	'tag' => $header['tag'],
	'class' => 'h1-font-size'
));

$text = Pacific_Helper::generate_paragraph(array(
	'text'  => $text['normal_text'],
	'class' => 'h6-font-size fontWeight300'
));


if($background == 'lightBackground'){
	$background = ' lightBackground darkFont';
}
else if($background == 'heavyDarkBackground'){
	$background = ' heavyDarkBackground lightFont ';
}
else {
	$background = ' darkBackground lightFont ';
}
if($goldenline['text'] == true){
	if($goldenline['url'] == true){
		$goldenline = Pacific_Helper::generate_acf_link(array(
		'link'            => $goldenline['url'],
		'class'           => 'goldenLink h6-font-size fontWeight300',
		'link_attributes' => array(
			'title' => $goldenline['text']
		)
		));
	}
	else {
		$goldenline = Pacific_Helper::generate_paragraph(array(
			'text'  => $goldenline['text'],
			'class' => 'goldenLink h6-font-size fontWeight300'
		));
	}
}

// $transparent_button = Pacific_Helper::generate_acf_link(array(
// 	'link'            => $transparent_button,
// 	'class'           => 'btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight',
// 	'link_attributes' => array(
// 		'title' => $transparent_button['title'],
// 		'target' => $transparent_button['target'] ?? null
// 	)
// ));

// $image = Pacific_Helper::generate_image( array(
// 	'image' => $image,
// 	'attributes' => array(
// 		'class' => 'img-fluid'
// 	)
// ));
?>


<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); echo $background; ?> hero-Parent selectedDesign center-align headingRecife-Parent">
	<?php
	if($breadcrumb):?>
	<div class="breadcrumbs-parent">
		<?php echo '<ul class="breadcrumbs">' . implode(' > ', $breadcrumbs) . '</ul>'; ?>
	</div>
	<?php
	endif;?>
	<div class="container-1024">
		<div class="hero-Flex">
		<?php
		if($preheader){
			echo $preheader;
		}
		if($header){
			echo $header;
		}
		if($text){
			echo $text;
		}


		if(!empty($goldenline) ||  empty($goldenline['url'])){
			if(!empty($goldenline['url'])){
				echo $goldenline;

			}

		}

		?>
		</div>
	</div>
</section>