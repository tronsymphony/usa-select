<?php

/**
 * Hero Simple General Block Template.
 */

// Create id attribute allowing for custom 'anchor' value.
$id = 'hero-simple-general-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

if( isset( $block['data']['preview_image_help'] )  ) :
	echo Pacific_Gutenberg::get_preview_image_general( $block['data']['preview_image_help'], $block['name'] );
	return;
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block hero-simple-general';
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
$block_styling = get_field('block_styling');

// $desktop_image = Pacific_Helper::generate_image(array(
//   'image' => $desktop_image,
//   'attributes' => array(
//     'class' => 'hero-simple-general__image desktop-image',
//     'title' => $desktop_image ? $desktop_image['title'] : null,
//     'alt' => $desktop_image ? $desktop_image['title'] : null
//   )
// ));

$mobile_image = Pacific_Helper::generate_image(array(
  'image' => $mobile_image,
  'attributes' => array(
    'class' => 'hero-simple-general__image mobile-image',
    'title' => $mobile_image ? $mobile_image['title'] : null,
    'alt' => $mobile_image ? $mobile_image['title'] : null
  )
  ));

$header = Pacific_Helper::generate_header(array(
  'text' => $header['title'],
  'tag' => $header['tag'],
  'class' => 'hero-simple-general__title'
));

$content = Pacific_Helper::generate_paragraph(array(
  'text'  => $content,
  'class' => 'hero-simple-general__text'
));

$button = Pacific_Helper::generate_acf_link(array(
  'link' => $hero_button['button_link'],
  'class' => 'hero-simple-general__btn btn ' . $hero_button['button_options'],
  'link_attributes' => array(
    'title' => $hero_button['button_link'] ? $hero_button['button_link']['title'] : null,
    'target' => $hero_button['button_link']['target'] ?? null
  )
));
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="
--padding-top: <?= ($block_styling['padding-top']) ? $block_styling['padding-top'].'px' : '0px' ?>;
--paddings-top--mobile: <?= ($block_styling['paddings-top--mobile']) ? $block_styling['paddings-top--mobile'].'px' : '0px' ?>;
--paddings-bottom: <?= ($block_styling['paddings-bottom']) ? $block_styling['paddings-bottom'].'px' : '0px' ?>;
--paddings-bottom--mobile: <?= ($block_styling['paddings-bottom--mobile']) ? $block_styling['paddings-bottom--mobile'].'px' : '0px' ?>;
--margins-top: <?= ($block_styling['margins-top']) ? $block_styling['margins-top'].'px' : '0px' ?>;
--margins-top--mobile: <?= ($block_styling['margins-top--mobile']) ? $block_styling['margins-top--mobile'].'px' : '0px' ?>;
--margins-bottom: <?= ($block_styling['margins-bottom']) ? $block_styling['margins-bottom'].'px' : '0px' ?>;
--margins-bottom--mobile: <?= ($block_styling['margins-bottom--mobile']) ? $block_styling['margins-bottom--mobile'].'px' : '0px' ?>;
--gradient: <?= ($block_styling['gradient'])? $block_styling['gradient'] : '#fff' ?>;
--desktop-background: url('<?php echo esc_attr($desktop_image['url']); ?>');
">
  <div class="container">
    <div class="hero-simple-general__inner-wrapper">
      <div class="hero-simple-general__image-wrapper">
        <?php // $desktop_image; ?>
        <?php echo $mobile_image; ?>
      </div>
      <div class="hero-simple-general__content-wrapper">
        <?php echo $header; ?>
        <?php echo $content; ?>
        <?php if ( $button ) : ?>
          <div class="hero-simple-general__button-wrapper">
            <?php echo $button ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>