<?php

/**
 * fade-text-block Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

if (isset($block['data']['preview_image_help'])) :
    echo Pacific_Gutenberg::get_preview_image($block['data']['preview_image_help'], $block['name']);
    return;
endif;

// Create id attribute allowing for custom 'anchor' value.
$id = 'fade-text-block-' . $block['id'];
if (!empty($block['anchor'])) :
    $id = $block['anchor'];
endif;

// Create class attribute allowing for custom 'className' and 'align' values.
$className = 'block fade-text-block';
if (!empty($block['className'])) :
    $className .= ' ' . $block['className'];
endif;
if (!empty($block['align'])) :
    $className .= ' align' . $block['align'];
endif;

$className = apply_filters('pacific_block_class', $className, $block, $post_id);

$block_styling = get_field('styling');
?>
<section id="<?php echo esc_attr($id); ?>" style_type
    class="<?php echo esc_attr($className); echo ' styling-' . get_field('light_style');  echo ' style_type-' . get_field('style_type'); ?> border_<?php the_field('remove_border_top'); ?>"
    style="
    --padding-top: <?= ($block_styling['padding-top']) ? $block_styling['padding-top'].'px' : '20px' ?>;
    --paddings-top--mobile: <?= ($block_styling['paddings-top--mobile']) ? $block_styling['paddings-top--mobile'].'px' : '20px' ?>;
    --paddings-bottom: <?= ($block_styling['paddings-bottom']) ? $block_styling['paddings-bottom'].'px' : '20px' ?>;
    --paddings-bottom--mobile: <?= ($block_styling['paddings-bottom--mobile']) ? $block_styling['paddings-bottom--mobile'].'px' : '20px' ?>;
    --margins-top: <?= ($block_styling['margins-top']) ? $block_styling['margins-top'].'px' : '0px' ?>;
    --margins-top--mobile: <?= ($block_styling['margins-top--mobile']) ? $block_styling['margins-top--mobile'].'px' : '0px' ?>;
    --margins-bottom: <?= ($block_styling['margins-bottom']) ? $block_styling['margins-bottom'].'px' : '0px' ?>;
    --margins-bottom--mobile: <?= ($block_styling['margins-bottom--mobile']) ? $block_styling['margins-bottom--mobile'].'px' : '0px' ?>;
    --gradient: <?= ($block_styling['gradient'])? $block_styling['gradient'] : '#222' ?>;
    ">

    <div class="container">
        <?php if (!empty(get_field('content'))) : ?>
            <div class="content">
                <?php the_field('content'); ?>

                <?php if (!get_field('disable_fade_effect')) : ?>
                <div class="overlay " data-trig-offset="400" data-trig></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

</section>

<style>
    .overlay {
        top: calc(var(--trig) * 2);
        /* opacity: calc(var(--trig) * 1); */
    }
</style>
