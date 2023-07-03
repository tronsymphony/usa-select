<div class="social-media">
  <div class="social-media__inner">
    <?php if (get_theme_field('footer_facebook', true)) : ?>
      <a class="social-media__item" href="<?php the_theme_field('footer_facebook', 'https://www.facebook.com/BanescoUSA/'); ?>">
        <img src="<?php the_theme_url(); ?>/assets/images/social-media/facebook-circle-green.svg" alt="facebook">
      </a>
    <?php endif; ?>
    <?php if (get_theme_field('footer_twitter', true)) : ?>
      <a class="social-media__item" href="<?php the_theme_field('footer_twitter', 'https://twitter.com/BanescoUSA/'); ?>">
        <img src="<?php the_theme_url(); ?>/assets/images/social-media/twitter-circle-green.svg" alt="twitter">
      </a>
    <?php endif; ?>
    <?php if (get_theme_field('footer_instagram', true)) : ?>
      <a class="social-media__item" href="<?php the_theme_field('footer_instagram', 'https://www.instagram.com/banescousa/'); ?>">
        <img src="<?php the_theme_url(); ?>/assets/images/social-media/instagram-circle-green.svg" alt="instagram">
      </a>
    <?php endif; ?>
    <?php if (get_theme_field('footer_linkedin', true)) : ?>
      <a class="social-media__item" href="<?php the_theme_field('footer_linkedin', 'https://www.linkedin.com/company/6715264/admin/updates/'); ?>">
        <img src="<?php the_theme_url(); ?>/assets/images/social-media/linkedin-circle-green.svg" alt="linkedin">
      </a>
    <?php endif; ?>
    <?php if (get_theme_field('footer_youtube', true)) : ?>
      <a class="social-media__item" href="<?php the_theme_field('footer_youtube', 'https://www.youtube.com/channel/UCSO98ZxCK4mU2Kjx-5_gmag/'); ?>">
        <img src="<?php the_theme_url(); ?>/assets/images/social-media/youtube-circle-green.svg" alt="youtube">
      </a>
    <?php endif; ?>
  </div>
</div>