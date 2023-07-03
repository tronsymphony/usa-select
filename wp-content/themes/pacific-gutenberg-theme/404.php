<?php get_header();

$header = get_field('headline_message', 'options');
$goldenlineHeading = get_field('golden_link', 'options');

$goldenUrl = $goldenlineHeading['url'];
$goldenLabel = $goldenlineHeading['label'];


 ?>
<section class="darkBackground hero-Parent selectedDesign center-align headingRecife-Parent">
	<div class="container-1024 lightFont">
		<div class="hero-Flex">
		<?php
		if($header){
			echo '<p class="h2-font-size">'.$header.'</p>';
		}
		if($goldenlineHeading){
			?>
			<a href="<?= $goldenUrl; ?>" class="goldenLink h6-font-size fontWeight300"><?= $goldenLabel; ?></a>
			<?php
		}

		?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
