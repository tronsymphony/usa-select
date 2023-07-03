<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package banescocontigo
 */

get_header(); ?>

<main id="primary" class="site-main main">

	<?= do_blocks('<!-- wp:banescocontigo/error-404 /-->'); ?>
	
	<?= do_blocks('<!-- wp:banescocontigo/attention {"title": "¿Necesitas ayuda?", "description": "Estamos a tu disposición en todos los canales.", "button": "Conversemos", "target": "/contactanos/"} /-->'); ?>

</main><!-- #primary -->

<?php get_footer();
