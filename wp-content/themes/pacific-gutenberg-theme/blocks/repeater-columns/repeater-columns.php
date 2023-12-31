<?php

if (isset($block['data']['preview_image_help'])) :
    echo Pacific_Gutenberg::get_preview_image($block['data']['preview_image_help'], $block['name']);
    return;
endif;

$id = 'repeater-columns-' . $block['id'];
$id = !empty($block['anchor']) ? $block['anchor'] : $id;

$className = 'block repeater-columns';
$className .= !empty($block['className']) ? ' ' . $block['className'] : '';
$className .= !empty($block['align']) ? ' align' . $block['align'] : '';
$className = apply_filters('pacific_block_class', $className, $block, $post_id);

$block_styling = get_field('styling');

?>

<section id="<?php echo esc_attr($id); ?>"
    class="<?php echo esc_attr($className); echo ' styling-' . get_field('light_style'); ?>"
    style="
        --padding-top: <?= $block_styling['padding-top'] ? $block_styling['padding-top'] . 'px' : '20px'; ?>;
        --paddings-top--mobile: <?= $block_styling['paddings-top--mobile'] ? $block_styling['paddings-top--mobile'] . 'px' : '20px'; ?>;
        --paddings-bottom: <?= $block_styling['paddings-bottom'] ? $block_styling['paddings-bottom'] . 'px' : '20px'; ?>;
        --paddings-bottom--mobile: <?= $block_styling['paddings-bottom--mobile'] ? $block_styling['paddings-bottom--mobile'] . 'px' : '20px'; ?>;
        --margins-top: <?= $block_styling['margins-top'] ? $block_styling['margins-top'] . 'px' : '0px'; ?>;
        --margins-top--mobile: <?= $block_styling['margins-top--mobile'] ? $block_styling['margins-top--mobile'] . 'px' : '0px'; ?>;
        --margins-bottom: <?= $block_styling['margins-bottom'] ? $block_styling['margins-bottom'] . 'px' : '0px'; ?>;
        --margins-bottom--mobile: <?= $block_styling['margins-bottom--mobile'] ? $block_styling['margins-bottom--mobile'] . 'px' : '0px'; ?>;
        --gradient: <?= $block_styling['gradient'] ? $block_styling['gradient'] : '#fff'; ?>
    ">
    <div class="container">
        <div class="content">
            <h2 class="title"><?php the_field('title'); ?></h2>
            <div class="subtitle">
                <?php the_field('sub_title'); ?>
            </div>
            <div class="text">
                <div class="columns">
                    <?php if (have_rows('columns')) :
                        while (have_rows('columns')) : the_row(); ?>
                            <div class="column"><?php echo get_sub_field('text'); ?></div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
