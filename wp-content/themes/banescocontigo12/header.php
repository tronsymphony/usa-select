<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banescocontigo
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site wrapper<?php if (get_theme_field('banner_image', true) || get_theme_field('banner_title', true) || get_theme_field('banner_description', true) || get_theme_field('banner_button_title', true)) : ?> has-banner<?php endif; ?>">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'banescocontigo'); ?></a>

		<?php if (get_theme_field('banner_image', true) || get_theme_field('banner_title', true) || get_theme_field('banner_description', true) || get_theme_field('banner_button_title', true)) : ?>
			<div class="banner active">
				<div class="banner__inner">
					<button class="banner__close">
						<svg>
							<use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#close-rounded"></use>
						</svg>
					</button>
					<?php if (get_theme_field('banner_image', true)) : ?>
						<div class="banner__image">
							<img src="<?php the_theme_field('banner_image', get_theme_url() . '/assets/images/header/banner.png'); ?>" alt="banner">
						</div>
					<?php endif; ?>
					<?php if (get_theme_field('banner_title', true) || get_theme_field('banner_description', true)) : ?>
						<div class="banner__text">
							<?php if (get_theme_field('banner_title', true)) : ?>
								<div class="banner__title"><?php the_theme_field('banner_title', 'Banesco Venezuela'); ?></div>
							<?php endif; ?>
							<?php if (get_theme_field('banner_description', true)) : ?>
								<div class="banner__description"><?php the_theme_field('banner_description', 'Descarga nuestra Banca Móvil'); ?></div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<?php if (get_theme_field('banner_button_link', true) || get_theme_field('banner_button_title', true)) : ?>
						<div class="banner__link">
							<a class="link-button" href="<?php the_theme_field('banner_button_link', '/'); ?>">
								<?php the_theme_field('banner_button_title', 'Ver'); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<header id="masthead" class="site-header header" data-modal-fixed>
			<div class="uheader">
				<div class="container">
					<div class="uheader__inner">
						<div class="uheader__pickers">
							<?php include get_template_directory() . '/template-parts/components/pickers.php' ?>
						</div>
					</div>
				</div>
			</div>
			<div class="lheader">
				<div class="container">
					<div class="lheader__inner">
						<?php if (get_theme_field('header_logotype', true)) : ?>
							<div class="site-branding lheader__logotype">
								<a class="logotype" href="/">
									<img src="<?php the_theme_field('header_logotype', get_theme_url() . '/assets/images/header/logotype.png'); ?>" alt="logotype">
								</a>
							</div>
						<?php endif; ?>
						<div id="site-navigation" class="lheader__navigation">
							<?php include get_template_directory() . '/template-parts/components/navigation.php' ?>
						</div>
						<div class="lheader__search">
							<?php include get_template_directory() . '/template-parts/components/search-input.php' ?>
						</div>
						<div class="lheader__buttons">
							<div class="lheader__button lheader__button--primary">
								<?php include get_template_directory() . '/template-parts/components/primary-picker.php' ?>
							</div>
							<div class="lheader__button lheader__button--outlined">
								<?php include get_template_directory() . '/template-parts/components/outlined-button.php' ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mheader">
				<div class="mheader__top">
					<div class="container">
						<div class="mheader__inner">
							<div class="site-logo mheader__logo">
								<?php if (get_theme_field('header_logo', true)) : ?>
									<a class="logo" href="/">
										<img src="<?php the_theme_field('header_logo', get_theme_url() . '/assets/images/header/logo.svg'); ?>" alt="logo">
									</a>
								<?php endif; ?>
							</div>
							<div class="mheader__button">
								<?php include get_template_directory() . '/template-parts/components/primary-picker.php' ?>
							</div>
							<div class="mheader__search">
								<?php include get_template_directory() . '/template-parts/components/search-input.php' ?>
							</div>
							<div class="mheader__burger">
								<?php include get_template_directory() . '/template-parts/components/burger.php' ?>
							</div>
						</div>
					</div>
				</div>
				<div class="mheader__menu">
					<div class="menu">
						<div class="mheader__top">
							<div class="mheader__inner">
								<div class="site-logo mheader__logo">
									<?php if (get_theme_field('header_logo', true)) : ?>
										<a class="logo" href="/">
											<img src="<?php the_theme_field('header_logo', get_theme_url() . '/assets/images/header/logo.svg'); ?>" alt="logo">
										</a>
									<?php endif; ?>
								</div>
								<div class="mheader__button">
									<?php include get_template_directory() . '/template-parts/components/primary-picker.php' ?>
								</div>
								<div class="mheader__search">
									<?php include get_template_directory() . '/template-parts/components/search-input.php' ?>
								</div>
								<div class="mheader__burger">
									<?php include get_template_directory() . '/template-parts/components/burger.php' ?>
								</div>
							</div>
						</div>
						<div class="menu__inner">
							<div class="menu__body">
								<?php include get_template_directory() . '/template-parts/components/navigation.php' ?>
							</div>
							<div class="menu__footer">
								<div class="menu__pickers">
									<?php include get_template_directory() . '/template-parts/components/pickers.php' ?>
								</div>
								<div class="menu__social">
									<?php include get_template_directory() . '/template-parts/components/social-media.php' ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->