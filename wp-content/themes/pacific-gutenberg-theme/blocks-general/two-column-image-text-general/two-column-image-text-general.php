<?php

/**
 * Two Column Image Text Block Template.
 */

// Create id attribute allowing for custom 'anchor' value.
$id = 'two-column-image-text-general-' . $block['id'];
if (!empty($block['anchor'])) :
	$id = $block['anchor'];
endif;

if( isset( $block['data']['preview_image_help'] )  ) :
	echo Pacific_Gutenberg::get_preview_image_general( $block['data']['preview_image_help'], $block['name'] );
	return;
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block two-column-image-text-general';
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
$button = get_field('button');
$layout = get_field('layout');
$block_styling = get_field('block_styling');
$layout = get_field('layout');

$desktop_image = Pacific_Helper::generate_image( array(
  'image' => $desktop_image,
  'attributes' => array(
    'title' => $desktop_image ? $desktop_image['title'] : null,
    'alt' => $desktop_image ? $desktop_image['title'] : null,
    'class' => 'two-column-image-text-general__image desktop'
  )
));

$mobile_image = Pacific_Helper::generate_image( array(
  'image' => $mobile_image,
  'attributes' => array(
    'title' => $mobile_image ? $mobile_image['title'] : null,
    'alt' => $mobile_image ? $mobile_image['title'] : null,
    'class' => 'two-column-image-text-general__image mobile'
  )
));

$header = Pacific_Helper::generate_header(array(
  'text' => $header['title'],
  'tag' => $header['tag'],
  'class' => 'two-column-image-text-general__title'
));

$content = Pacific_Helper::generate_wysiwyg(array(
	'content'  => $content,
	'classes' => array('two-column-image-text-general__content'),
));

$button = Pacific_Helper::generate_acf_link(array(
  'link' => $button['link'],
  'class' => 'two-column-image-text-general__btn btn ' . $button['button_options'],
  'link_attributes' => array(
    'title' => $button['link'] ? $button['link']['title'] : null,
    'target' => $button['link']['target'] ?? null
  )
));
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"
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
    <div class="two-column-image-text-general__inner-container <?php echo $layout; ?>">
      <div class="two-column-image-text-general__image-wrapper">
        <?php echo $desktop_image; ?>
        <?php echo $mobile_image; ?>
      </div>
      <div class="two-column-image-text-general__content-wrapper">
        <?php echo $header; ?>
        <?php echo $content; ?>
        <?php if ( $button ) : ?>
          <div class="two-column-image-text-general__button-wrapper">
            <?php echo $button;?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>