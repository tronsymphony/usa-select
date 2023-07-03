<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banescocontigo
 */

$query_popups = new WP_Query(
	[
		'post_type'				 => 'popups',
		'posts_per_page'   => -1,
	]
);

$query_sidebars = new WP_Query(
	[
		'post_type'				 => 'sidebars',
		'posts_per_page'   => -1,
	]
);

$has_sidebar_1 = is_active_sidebar('sidebar-1');
?>

<?php if ($has_sidebar_1) : ?>

	<div class="footer__widgets">
		<?php dynamic_sidebar('sidebar-1'); ?>
	</div>

<?php endif; ?>

<?php if (get_theme_field('footer_social_media_enable', true)) : ?>

	<div class="footer__social">
		<div class="container">
			<?php include get_template_directory() . '/template-parts/components/social-media.php' ?>
		</div>
	</div>

<?php endif; ?>

<div class="footer__links">
	<div class="container">
		<div class="footer__links-inner">
			<?php wp_nav_menu([
				'theme_location' => 'footer_menu',
				'menu_class'     => 'menu-list',
			]); ?>
		</div>
	</div>
</div>

<div class="footer__text">
	<div class="container">
		<div class="footer__text-inner">
			<div class="footer__text-content">
				<?php the_theme_field('footer_legal_warning', '<b>Aviso Legal:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed nulla et libero pretium tristique. Proin in orci arcu. Praesent quis odio tempus, blandit ex quis, porttitor lorem. Aenean felis nisl, gravida vel lacus id, cursus pretium nulla. Suspendisse ultrices enim vel accumsan rutrum. Sed sit amet vulputate lorem. Phasellus metus ex, suscipit blandit odio ac, imperdiet venenatis mi. Ut quis eros a magna ornare luctus. Phasellus sodales tortor nulla, sed varius dolor convallis id.'); ?>
			</div>
		</div>
	</div>
</div>

<footer id="colophon" class="site-footer footer">
	<div class="container">
		<div class="footer__inner">
			<?php if (get_theme_field('footer_logo', true)) : ?>
				<a class="footer__logo" href="/">
					<img src="<?php the_theme_field('footer_logo', get_theme_url() . '/assets/images/footer/white-logo.svg'); ?>" alt="logo">
				</a>
			<?php endif; ?>
			<?php if (get_theme_field('footer_copyright', true)) : ?>
				<div class="footer__copyright">
					<div class="copyright">
						<?php the_theme_field('footer_copyright', 'Banesco © Copyright 2022. Todos los derechos reservados.'); ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if (get_theme_field('footer_social_media_enable', true)) : ?>
				<div class="footer__social">
					<div class="social-media">
						<div class="social-media__inner">
							<?php if (get_theme_field('footer_facebook', true)) : ?>
								<a class="social-media__item" href="<?php the_theme_field('footer_facebook', '/'); ?>">
									<img src="<?php the_theme_url(); ?>/assets/images/social-media/facebook-circle-white.svg" alt="facebook">
								</a>
							<?php endif; ?>
							<?php if (get_theme_field('footer_twitter', true)) : ?>
								<a class="social-media__item" href="<?php the_theme_field('footer_twitter', '/'); ?>">
									<img src="<?php the_theme_url(); ?>/assets/images/social-media/twitter-circle-white.svg" alt="twitter">
								</a>
							<?php endif; ?>
							<?php if (get_theme_field('footer_instagram', true)) : ?>
								<a class="social-media__item" href="<?php the_theme_field('footer_instagram', '/'); ?>">
									<img src="<?php the_theme_url(); ?>/assets/images/social-media/instagram-circle-white.svg" alt="instagram">
								</a>
							<?php endif; ?>
							<?php if (get_theme_field('footer_linkedin', true)) : ?>
								<a class="social-media__item" href="<?php the_theme_field('footer_linkedin', '/'); ?>">
									<img src="<?php the_theme_url(); ?>/assets/images/social-media/linkedin-circle-white.svg" alt="linkedin">
								</a>
							<?php endif; ?>
							<?php if (get_theme_field('footer_youtube', true)) : ?>
								<a class="social-media__item" href="<?php the_theme_field('footer_youtube', '/'); ?>">
									<img src="<?php the_theme_url(); ?>/assets/images/social-media/youtube-circle-white.svg" alt="youtube">
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</footer><!-- #colophon -->

<div class="modals">
	<?php while ($query_popups->have_posts()) : $query_popups->the_post();
		global $post;	?>
		<div class="modal" data-modal="#<?= $post->post_name ?>">
			<div data-modal-close class="modal__area"></div>
			<div class="modal__body">
				<div class="modal__content">
					<button data-modal-close class="modal__close" aria-label="Close modal window"><img src="<?php echo get_theme_url() . '/assets/images/icons/close-grey.svg'; ?>" alt="close"></button>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</div>

<div class="sidebars">
	<?php while ($query_sidebars->have_posts()) : $query_sidebars->the_post();
		global $post;	?>
		<div class="sidebar" data-sidebar="#<?= $post->post_name ?>">
			<div data-sidebar-close class="sidebar__area"></div>
			<div class="sidebar__body">
				<div class="sidebar__content">
					<button data-sidebar-close class="sidebar__close" aria-label="Close sidebar window"><img src="<?php echo get_theme_url() . '/assets/images/icons/close-grey.svg'; ?>" alt="close"></button>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</div>

<?php if (get_theme_field('chat_open_image', true)) : ?>
	<div class="helper">
		<div class="helper__inner">
			<button class="helper__button helper__button--action">
				<img src="<?php the_theme_field('chat_open_image', get_theme_url() . '/assets/images/helper/help.svg'); ?>" alt="help">
			</button>
		</div>
		<div class="helper__dropdown">
			<?php if (get_theme_field('chat_whatsapp_image', true)) : ?>
				<a class="helper__button helper__button--fill-green" href="<?php the_theme_field('chat_whatsapp_link', '/'); ?>">
					<img src="<?php the_theme_field('chat_whatsapp_image', get_theme_url() . '/assets/images/helper/whatsapp.svg'); ?>" alt="whatsapp">
				</a>
			<?php endif; ?>
			<?php if (get_theme_field('chat_message_image', true)) : ?>
				<a class="helper__button" href="<?php the_theme_field('chat_message_link', '/'); ?>">
					<img src="<?php the_theme_field('chat_message_image', get_theme_url() . '/assets/images/helper/message.svg'); ?>" alt="message">
				</a>
			<?php endif; ?>
			<?php if (get_theme_field('chat_call_image', true)) : ?>
				<a class="helper__button" href="<?php the_theme_field('chat_call_link', 'tel:+123456789'); ?>">
					<img src="<?php the_theme_field('chat_call_image', get_theme_url() . '/assets/images/helper/call.svg'); ?>" alt="call">
				</a>
			<?php endif; ?>
			<?php if (get_theme_field('chat_email_image', true)) : ?>
				<a class="helper__button" href="<?php the_theme_field('chat_email_link', 'mailto:example@gmail.com'); ?>">
					<img src="<?php the_theme_field('chat_email_image', get_theme_url() . '/assets/images/helper/email.svg'); ?>" alt="email">
				</a>
			<?php endif; ?>
			<?php if (get_theme_field('chat_close_image', true)) : ?>
				<button class="helper__button helper__button--close">
					<img src="<?php the_theme_field('chat_close_image', get_theme_url() . '/assets/images/helper/close.svg'); ?>" alt="close">
				</button>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<div class="overlay"></div>

<?php if (get_theme_field('chat_become_a_client_title', true)) : ?>
	<?php if (!has_block('banescocontigo/locations')) : ?>
		<div class="mobile-fixed-button active" tabindex="-1">
			<div class="container">
				<a href="<?php the_theme_field('chat_become_a_client_link', '/'); ?>" class="primary-button">
					<?php the_theme_field('chat_become_a_client_title', 'Hazte cliente'); ?>
				</a>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>


</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	new class Modals {

		constructor() {
			this.init();
			this.addListenersOpen();
			this.addListenersClose();
			this.addListenerHash();
		}

		init() {
			const modal = document.querySelector(`[data-modal="${window.location.hash}"]`);

			if (window.location.hash && modal) {
				modal.classList.add('active');
				this._hideScroll();
			} else {
				document.querySelectorAll(`[data-modal]`).forEach(modal => {
					modal.classList.remove('active');
				});
			}
		}

		addListenersOpen() {
			document.querySelectorAll('a[data-modal-open]').forEach(trigger => {
				trigger.addEventListener('click', this.openModal.bind(this));
			});
		}

		addListenersClose() {
			document.querySelectorAll('[data-modal-close]').forEach(trigger => {
				trigger.addEventListener('click', this.closeModal.bind(this));
			});
		}

		addListenerHash() {
			window.addEventListener('hashchange', this.init.bind(this));
		}

		openModal(event) {
			event.preventDefault();

			const trigger = event.target.closest('[data-modal-open]');
			const modal = document.querySelector(`[data-modal="${trigger.hash}"]`);
			if (modal) {
				modal.classList.add('active');

				this._hideScroll();
			} else {
				console.error(`The modal window by id '${id}' not found!`);
			}

			window.location.hash = trigger.hash;
			sessionStorage.setItem("last-url", event?.oldURL);
		}

		closeModal(event) {
			event.preventDefault();

			const modal = event.target.closest('[data-modal]');

			if (modal) {
				modal.classList.remove('active');

				this._visibleScroll();

				const lastUrl = sessionStorage.getItem("last-url");

				if (lastUrl.indexOf('#') == -1) {
					history.pushState("", document.title, window.location.pathname + window.location.search);
				} else {
					const lastHash = lastUrl.substr(lastUrl.indexOf('#'));
					window.location.hash = lastHash;
				}

			} else {
				console.error(`The modal window by id '${id}' not found!`);
			}
		}

		_hideScroll() {
			const scrollWidth = window.innerWidth - document.body.offsetWidth;

			if (scrollWidth) {
				document.querySelectorAll('[data-modal-fixed]').forEach(element => {
					element.style.paddingRight = `${scrollWidth}px`;
				});
				document.body.style.paddingRight = `${scrollWidth}px`;
			}

			document.body.style.overflow = 'hidden';
		}

		_visibleScroll() {
			document.querySelectorAll('[data-modal-fixed]').forEach(element => {
				element.style.paddingRight = '0';
			});

			document.body.style.paddingRight = '0';
			document.body.style.overflow = 'visible';
		}
	};
</script>

<script>
	new class Sidebars {

		constructor() {
			this.init();
			this.addListenersOpen();
			this.addListenersClose();
			this.addListenerHash();
		}

		init() {
			const sidebar = document.querySelector(`[data-sidebar="${window.location.hash}"]`);

			if (window.location.hash && sidebar) {
				sidebar.classList.add('active');
				this._hideScroll();
			} else {
				document.querySelectorAll(`[data-sidebar]`).forEach(sidebar => {
					sidebar.classList.remove('active');
				});
			}
		}

		addListenersOpen() {
			document.querySelectorAll('a[data-sidebar-open]').forEach(trigger => {
				trigger.addEventListener('click', this.openSidebar.bind(this));
			});
		}

		addListenersClose() {
			document.querySelectorAll('[data-sidebar-close]').forEach(trigger => {
				trigger.addEventListener('click', this.closeSidebar.bind(this));
			});
		}

		addListenerHash() {
			window.addEventListener('hashchange', this.init.bind(this));
		}

		openSidebar(event) {
			event.preventDefault();

			const trigger = event.target.closest('[data-sidebar-open]');
			const sidebar = document.querySelector(`[data-sidebar="${trigger.hash}"]`);
			if (sidebar) {
				sidebar.classList.add('active');

				this._hideScroll();
			} else {
				console.error(`The sidebar window by id '${id}' not found!`);
			}

			window.location.hash = trigger.hash;
			sessionStorage.setItem("last-url", event?.oldURL);
		}

		closeSidebar(event) {
			event.preventDefault();

			const sidebar = event.target.closest('[data-sidebar]');

			if (sidebar) {
				sidebar.classList.remove('active');

				this._visibleScroll();

				const lastUrl = sessionStorage.getItem("last-url");

				if (lastUrl.indexOf('#') == -1) {
					history.pushState("", document.title, window.location.pathname + window.location.search);
				} else {
					const lastHash = lastUrl.substr(lastUrl.indexOf('#'));
					window.location.hash = lastHash;
				}

			} else {
				console.error(`The sidebar window by id '${id}' not found!`);
			}
		}

		_hideScroll() {
			const scrollWidth = window.innerWidth - document.body.offsetWidth;

			if (scrollWidth) {
				document.querySelectorAll('[data-sidebar-fixed]').forEach(element => {
					element.style.paddingRight = `${scrollWidth}px`;
				});
				document.body.style.paddingRight = `${scrollWidth}px`;
			}

			document.body.style.overflow = 'hidden';
		}

		_visibleScroll() {
			document.querySelectorAll('[data-sidebar-fixed]').forEach(element => {
				element.style.paddingRight = '0';
			});

			document.body.style.paddingRight = '0';
			document.body.style.overflow = 'visible';
		}
	};
</script>

</body>

</html>