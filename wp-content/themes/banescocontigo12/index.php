<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package banescocontigo
 */

$page = get_page_by_path('blog');

get_header();
?>

<?php if (is_home() || is_category() || is_tag() || is_archive()) : ?>
	<main id="primary" class="site-main main">
		<?= do_blocks('<!-- wp:banescocontigo/blog /-->'); ?>

		<?php if (is_home()) : ?>
			<?= do_blocks('<!-- wp:banescocontigo/videos {"paddings": {"desktop": {"top": "88px", "bottom": "90px"}, "mobile": {"top": "43px", "bottom": "47px"}},"gradient": "rgba(235,240,245,0.4)", "title": {"desktop": "Siguenos en nuestro canal de YouTube", "mobile": "", "mIncrease": false }, "items": [{"title": "Aprende cómo crearte un usuario en Banca Digital - Autoafiliación", "maxLines": "3", "text": "¿Aún no tienes usuario en Banca Digital? ¡Te enseñamos cómo hacerlo!", "image": {"url": "video-1.jpg", "alt": ""}, "link": "/"}, {"title": "Banca Digital Banesco | Realiza tus transacciones bancarias", "maxLines": "3", "text": "Hasta desde el cine 🎬🍿 podrás hacer tus transacciones bancarias con nuestra nueva Banca Digital Banesco.", "image": {"url": "video-2.jpg", "alt": ""}, "link": "/"}, {"title": "Banca Digital Banesco | Revisa tu cuenta desde donde estés", "maxLines": "3", "text": "Nada como poder gestionar tus productos desde donde te encuentres a través desde #BancaDigitalBanesco😎 ¡Nuestra Banca más moderna hasta ahora! ", "image": {"url": "video-3.jpg", "alt": ""}, "link": "/"}, {"title": "Campamento Infantil Banesco 2022", "maxLines": "4", "text": "Sus caritas lo dicen todo. 😄💚 Fueron unos días completos y llenos de diversión en el Campamento Banesco. Donde los niños de nuestros colaboradores disfrutaron de dinámicas educativas de la mano de @menasacademy.", "image": {"url": "video-4.jpg", "alt": ""}, "link": "/"}, {"title": "Fundación Nuestro Pequeños Hermanos I Banesco 2021", "maxLines": "4", "text": "La magia de la navidad se reflejó en cada sonrisa de los niños de la fundación Nuestro Pequeños Hermanos. 🌟", "image": {"url": "video-5.jpg", "alt": ""}, "link": "/"}]} /-->'); ?>
		<?php endif; ?>
		<?php if (is_post_type_archive('responsibilities')) : ?>
			<?= do_blocks('<!-- wp:banescocontigo/videos-and-images {"paddings": {"desktop": {"top": "88px", "bottom": "90px"}, "mobile": {"top": "43px", "bottom": "47px"}},"gradient": "rgba(235,240,245,0.4)", "title": {"desktop": "Siguenos en nuestro canal de YouTube", "mobile": "", "mIncrease": false }, "videos": [{"title": "Aprende cómo crearte un usuario en Banca Digital - Autoafiliación", "maxLines": "3", "text": "¿Aún no tienes usuario en Banca Digital? ¡Te enseñamos cómo hacerlo!", "image": {"url": "video-1.jpg", "alt": ""}, "link": "/"}, {"title": "Banca Digital Banesco | Realiza tus transacciones bancarias", "maxLines": "3", "text": "Hasta desde el cine 🎬🍿 podrás hacer tus transacciones bancarias con nuestra nueva Banca Digital Banesco.", "image": {"url": "video-2.jpg", "alt": ""}, "link": "/"}, {"title": "Banca Digital Banesco | Revisa tu cuenta desde donde estés", "maxLines": "3", "text": "Nada como poder gestionar tus productos desde donde te encuentres a través desde #BancaDigitalBanesco😎 ¡Nuestra Banca más moderna hasta ahora! ", "image": {"url": "video-3.jpg", "alt": ""}, "link": "/"}, {"title": "Campamento Infantil Banesco 2022", "maxLines": "4", "text": "Sus caritas lo dicen todo. 😄💚 Fueron unos días completos y llenos de diversión en el Campamento Banesco. Donde los niños de nuestros colaboradores disfrutaron de dinámicas educativas de la mano de @menasacademy.", "image": {"url": "video-4.jpg", "alt": ""}, "link": "/"}, {"title": "Fundación Nuestro Pequeños Hermanos I Banesco 2021", "maxLines": "4", "text": "La magia de la navidad se reflejó en cada sonrisa de los niños de la fundación Nuestro Pequeños Hermanos. 🌟", "image": {"url": "video-5.jpg", "alt": ""}, "link": "/"}]} /-->'); ?>
		<?php endif; ?>
		<?php if (is_post_type_archive('library')) : ?>
			<?= do_blocks('<!-- wp:banescocontigo/library {"paddings": {"desktop": {"top": "0px", "bottom": "112px"}, "mobile": {"top": "40px", "bottom": "48px"}}, "title": {"desktop": "Los más descargados", "mobile": ""}, "items": [{"title": "Nuevo País del Cine", "link": "/", "image": {"url": "image-1.jpg", "alt": ""}},{"title": "101 razones para amar a los Leones y 10 motivos para ser antimagallanero", "link": "/", "image": {"url": "image-2.jpg", "alt": ""}},{"title": "70 años de Crónicas Policiales", "link": "/", "image": {"url": "image-3.jpg", "alt": ""}},{"title": "Retratos de Venezuela", "link": "/", "image": {"url": "image-4.jpg", "alt": ""}},{"title": "Magallanes Contra Viento y Marea: 100 años de Historia, 1917-2017", "link": "/", "image": {"url": "image-5.jpg", "alt": ""}},{"title": "Caracas en 450: Un homenaje a Caracas en su Aniversario", "link": "/", "image": {"url": "image-6.jpg", "alt": ""}}]} /-->'); ?>
		<?php endif; ?>
		<?php if (is_post_type_archive('library')) : ?>
			<?= do_blocks('<!-- wp:banescocontigo/collections {"paddings": {"desktop": {"top": "88px", "bottom": "89px"}, "mobile": {"top": "51px", "bottom": "58px"}},"gradient": "rgba(235,240,245,0.4)", "title": {"desktop": "Nuestras colecciones", "mobile": ""}, "content": {"desktop": "<p>Cuando las naciones se someten a sí mismas a procesos de revisión de principios fundamentales, los ciudadanos aspiran que alguna institución haya tenido la visión de acopiar las distintas expresiones que están en revisión. A veces son los artistas, o los estudiosos de una u otra disciplina quienes logran apuntar y descubrir los aspectos, temas, creencias, valores medulares -o los valores patrimoniales- que le asignan identidad a una nación.</p>\n\n<p>En Banesco hemos querido crear esta colección, que nos ofrece una muy diversa visión de Venezuela y el venezolano de ayer y de hoy, algunos de sus rasgos identitarios, algunas de sus expresiones plásticas, o musicales; también expresiones naturales o de fe. Desde la revisión, a través de una selección de ensayos, de nuestra noción de la Independencia, pasando por un libro que impregna nuestra retina de la luz de Los Roques, hasta una compilación fotográfica de los Diablos Danzantes de Corpus Christie, una de las tradiciones de expresión de la fe más difundidas en toda la región centro norte de Venezuela, que además nos arroja cierta información acerca de la capacidad para organizarse -por objetivos comunes- del venezolano. No es posible hablar de música en Venezuela sin recordar al maestro Simón Díaz y no es posible hacer un inventario de las expresiones plásticas sin mencionar, en capítulo especial, al maestro Jacobo Borges. Todos estos aspectos, personas, grupos, escenarios naturales, interpretaciones históricas conviven en esta colección como un mapa de ruta, una guía para retornar a la esencia de lo que somos: venezolanos.</p>", "mobile": "Cuando las naciones se someten a sí mismas a procesos de revisión de principios fundamentales, los ciudadanos aspiran que alguna institución haya tenido la visión de acopiar las distintas expresiones que están en revisión. A veces son los artistas, o los estudiosos de una u otra disciplina quienes logran apuntar y descubrir los aspectos, temas, creencias, valores medulares -o los valores patrimoniales- que le asignan identidad a una nación."}, "items1": [{"title": "Campos de Gloria", "link": "/", "image": {"url": "image-1.jpg", "alt": ""}},{"title": "Cardenales de Lara de Carora a Barquisimeto. 80 años en la Pelota", "link": "/", "image": {"url": "image-2.jpg", "alt": ""}},{"title": "Antología 6° Concurso Nacional de Poesía Joven Rafael Cadenas", "link": "/", "image": {"url": "image-3.jpg", "alt": ""}},{"title": "El Vuelo de Las Águilas: 52 años en La LVBP", "link": "/", "image": {"url": "image-4.jpg", "alt": ""}},{"title": "5º Concurso Nacional de Poesía Joven Rafael Cadenas 2020", "link": "/", "image": {"url": "image-5.jpg", "alt": ""}},{"title": "4º Concurso Nacional de Poesía Joven Rafael Cadenas 2019", "link": "/", "image": {"url": "image-6.jpg", "alt": ""}}]} /-->'); ?>
		<?php endif; ?>

	</main><!-- #primary -->

<?php else : ?>

	<main id="primary" class="site-main main">

		<?php the_content() ?>

	</main><!-- #primary -->

<?php endif; ?>

<?php get_footer();
