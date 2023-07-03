<?php 
$args = array(
	'theme_location'  => 'primary',
	'menu_class'      => 'site-header__menu-item-list',
	'container'       => 'nav',
	'container_class' => 'site-header__navbar',
	'echo'            => false,
	'fallback_cb'     => false
); 
$nav_menu = wp_nav_menu( $args );
?>
<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
	<div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
	</div>
</div> -->

<div class="top-header ">
	<div class="container-fluid topFlex">
		<div class="part-flex-1-3 empty-part"></div>
		<div class="part-flex-1-3">
			<img class="mainLogo" src="/wp-content/uploads/2023/06/Logo-H.svg" alt="Banesco Bank USA"/>
		</div>
		<div class="part-flex-1-3">
			<a class="top-menu" href="#">Sign in <span>to Banesco USA Accounts</span></a>
		</div>
	</div>
</div>
<header class="site-header">
	<div class="container-fluid site-header-wrap p-0">
		<div class="site-header__inner-wrapper navbar-light-new">
			
			<?php if (get_theme_mod('theme_logo')) : ?>
			  <a class="navbar-brand p-0" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
			    <img src="<?php echo esc_url(get_theme_mod('theme_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo">
			  </a>
			<?php else : ?>
			  <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
			<?php endif; ?>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="hamburger-icon"></span>
			</button>
			<div class="site-header__position-wrapper  collapse navbar-collapse" id="navbarCollapse">
				<?php echo $nav_menu; ?>
				
			</div>
			<div class="multilanguage-wrapper">
				<img src="<?= get_template_directory_uri(); ?>/assets/icons/worldwide-lang.svg" alt="language" />
				<span>English</span>
			</div>
		</div>
	</div>
</header>
