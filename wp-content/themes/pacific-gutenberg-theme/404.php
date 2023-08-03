<?php get_header();

$header = get_field('headline_message', 'options');
$goldenlineHeading = get_field('golden_link', 'options');

$goldenUrl = $goldenlineHeading['url'];
$goldenLabel = $goldenlineHeading['label'];


 ?>
<section class="lightBackground hero-Parent section-404 selectedDesign center-align headingRecife-Parent">
    <div class="container-1024 lightFont">
        <div class="hero-Flex">
            <?php
		if($header){
			echo '<h1 class="h1-font-size h1-404">'.$header.'</h1>';
		}
		if($goldenlineHeading){
			?>
            <a href="<?= $goldenUrl; ?>" class="goldenLink goldenLink-404">
                <?= $goldenLabel; ?>
                <span class="chevron">
                    <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.146447 12.6464C-0.0488156 12.4512 -0.0488156 12.1346 0.146447 11.9393L5.44975 6.63604L0.146446 1.33274C-0.0488163 1.13748 -0.0488167 0.820894 0.146446 0.625632C0.341708 0.43037 0.65829 0.43037 0.853552 0.625632L6.86396 6.63604L0.853553 12.6464C0.658291 12.8417 0.341709 12.8417 0.146447 12.6464Z"
                            fill="#F1D593" />
                    </svg>

                </span>
            </a>
            <?php
		}

		?>
        </div>
    </div>
</section>
<?php get_footer(); ?>