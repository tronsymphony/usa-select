<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="error-404" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    ">
    <div class="container">
			<div class="error-404__inner">
				<?php if (get_theme_field('404_image', true)) : ?>
					<div class="error-404__image">
						<img src="<?php the_theme_field('404_image', get_theme_url() . '/blocks/src/error-404/assets/404.svg'); ?>" alt="404 error">
					</div>
				<?php endif; ?>
				<div class="error-404__content">
					<h2 class="error-404__title"><?php the_theme_field('404_title', '¡Ups! No lo encontramos'); ?></h2>
					<?php if (get_theme_field('404_description', true)) : ?>
						<h3 class="error-404__subtitle"><?php the_theme_field('404_description', '¿Qué tal si intentas de otra manera?'); ?></h3>
					<?php endif; ?>
					<?php if (get_theme_field('404_button_title', true)) : ?>
						<div class="error-404__buttons">
							<div class="error-404__button">
								<a class="primary-button" href="<?php the_theme_field('404_button_link', '/'); ?>">
									<?php the_theme_field('404_button_title', 'Volver atrás'); ?>
								</a>
							</div>
						</div>
					<?php endif; ?>
					<?php if (get_theme_field('404_links_enable', true)) : ?>
						<?php if (get_theme_field('404_links_title', true)) : ?>
							<h4 class="error-404__info"><?php the_theme_field('404_links_title', 'O visita las siguientes páginas:'); ?></h4>
						<?php endif; ?>
						<?php if (get_theme_field('404_links_first_title', true) || get_theme_field('404_links_second_title', true) || get_theme_field('404_links_third_title', true)) : ?>
							<div class="error-404__links">
								<?php if (get_theme_field('404_links_first_title', true)) : ?>
									<a class="error-404__link link-button" href="<?php echo get_theme_field('404_links_first_link', '/') ?>"><?php echo get_theme_field('404_links_first_title', 'Homepage') ?></a>
								<?php endif; ?>
								<?php if (get_theme_field('404_links_second_title', true)) : ?>
									<a class="error-404__link link-button" href="<?php echo get_theme_field('404_links_second_link', '/') ?>"><?php echo get_theme_field('404_links_second_title', 'Tarjetas') ?></a>
								<?php endif; ?>
								<?php if (get_theme_field('404_links_third_title', true)) : ?>
									<a class="error-404__link link-button" href="<?php echo get_theme_field('404_links_third_link', '/') ?>"><?php echo get_theme_field('404_links_third_title', 'Solicitudes') ?></a>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
  </div>
</section>