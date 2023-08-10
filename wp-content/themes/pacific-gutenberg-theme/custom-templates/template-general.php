<?php
/*
Template Name: USA General
*/

get_header('general'); // Loads the custom header (header-custom.php)
?>

<!-- Your custom template content goes here -->
<main id="main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</main><!-- /#main -->

<?php get_footer('general'); // Loads the custom footer (footer-custom.php) ?>
