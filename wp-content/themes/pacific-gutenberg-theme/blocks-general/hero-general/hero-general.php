<?php

/**
 * Hero General Block Template.
 */

// Create id attribute allowing for custom 'anchor' value.
$id = 'hero-general-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

if( isset( $block['data']['preview_image_help'] )  ) :
	echo Pacific_Gutenberg::get_preview_image_general( $block['data']['preview_image_help'], $block['name'] );
	return;
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block hero-general';
if (!empty($block['className'])) :
	$className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
	$className .= ' align' . $block['align'];
endif;

// Load values and assing defaults.
$desktop_image = get_field('desktop_image');
$mobile_image = get_field('mobile_image');
$header = get_field('header');
$content = get_field('content');
$hero_button = get_field('hero_button');
$add_images =  get_field('add_images');
$image_top_allignment = get_field('image_top_allignment');
$button_options = get_field('button_options');

$header = Pacific_Helper::generate_header(array(
  'text' => $header['title'],
  'tag' => $header['tag'],
  'class' => 'hero-general__title'
));

$content = Pacific_Helper::generate_paragraph(array(
  'text'  => $content,
  'class' => 'hero-general__text'
));

$button = Pacific_Helper::generate_acf_link(array(
  'link' => $hero_button,
  'class' => 'hero-general__btn btn ' . $button_options,
  'link_attributes' => array(
    'title' => $hero_button ? $hero_button['title'] : null,
    'alt' =>  $hero_button ? $hero_button['title'] : null,
    'target' => $hero_button['target'] ?? null
  )
));

$desktop_image = Pacific_Helper::generate_image(array(
  'image' => $desktop_image,
  'attributes' => array(
    'class' => 'hero-general__image desktop-image',
    'title' => $desktop_image ? $desktop_image['title'] : null,
    'alt' => $desktop_image ? $desktop_image['title'] : null
  )
));

$mobile_image = Pacific_Helper::generate_image(array(
  'image' => $mobile_image,
  'attributes' => array(
    'class' => 'hero-general__image mobile-image',
    'title' => $mobile_image ? $mobile_image['title'] : null,
    'alt' => $mobile_image ? $mobile_image['title'] : null
  )
  ));
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $add_images ? null : "no-images"; ?>">
  <div class="container">
    <div class="hero-general__inner-wrapper <?php echo $image_top_allignment; ?>">
      <div class="hero-general__content-wrapper">
        <?php echo $header; ?>
        <?php echo $content; ?>

        <div class="hero-general__button-wrapper">
          <?php echo $button; ?>
        </div>
      </div>

      <div class="hero-general__image-wrapper">
        <?php echo $desktop_image; ?>
        <?php echo $mobile_image; ?>
      </div>
    </div>
  </div>
</section>