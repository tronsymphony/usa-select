<?php if (get_theme_field('header_outlined_button_title', true)) : ?>
  <a class="outlined-button small with-icon" href="<?php the_theme_field('header_outlined_button_link', 'https://www.banesco.com/'); ?>">
    <?php if (get_theme_field('header_outlined_button_icon', true)) : ?>
      <img src="<?php the_theme_field('header_outlined_button_icon', get_theme_url() . '/assets/images/header/clients.svg'); ?>" alt="clients">
    <?php endif; ?>
    <span><?php the_theme_field('header_outlined_button_title', 'Hazte cliente'); ?></span>
  </a>
<?php endif; ?>