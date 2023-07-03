<?php if (get_theme_field('header_locations_button_title', true)) : ?>
  <a class="location-picker" href="<?php the_theme_field('header_locations_button_link', '/ubicaciones/'); ?>">
    <div class="location-picker__inner">
      <?php if (get_theme_field('header_locations_button_icon', true)) : ?>
        <img class="location-picker__image" src="<?php the_theme_field('header_locations_button_icon', get_theme_url() . '/assets/images/header/sucursales.svg'); ?>" alt="locations">
      <?php endif; ?>
      <div class="location-picker__title"><?php the_theme_field('header_locations_button_title', 'Ubícanos'); ?></div>
    </div>
  </a>
<?php endif; ?>