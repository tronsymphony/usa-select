<?php if (get_theme_field('header_primary_button_title', true)) : ?>
  <div class="primary-picker" tabindex="-1">
    <?php if (get_theme_field('header_primary_button_type', 'picker') == 'picker') : ?>
      <button class="primary-picker__button primary-button small<?php if (get_theme_field('header_primary_button_icon', true)) : ?> with-icon<?php endif; ?>">
        <?php if (get_theme_field('header_primary_button_icon', true)) : ?>
          <img src="<?php the_theme_field('header_primary_button_icon', get_theme_url() . '/assets/images/header/login.svg'); ?>" alt="login">
        <?php endif; ?>
        <span><?php the_theme_field('header_primary_button_title', 'Banca Online'); ?></span>
      </button>
      <div class="primary-picker__dropdown">
        <ul>
          <?php if (get_theme_field('header_primary_button_links_first_title', true)) : ?>
            <li><a href="<?php echo get_theme_field('header_primary_button_links_first_value', '/') ?>"><?php echo get_theme_field('header_primary_button_links_first_title', 'BanescoMóvil') ?></a></li>
          <?php endif; ?>
          <?php if (get_theme_field('header_primary_button_links_second_title', true)) : ?>
            <li><a href="<?php echo get_theme_field('header_primary_button_links_first_value', '/') ?>"><?php echo get_theme_field('header_primary_button_links_second_title', 'Banca Empresarial') ?></a></li>
          <?php endif; ?>
          <?php if (get_theme_field('header_primary_button_links_third_title', true)) : ?>
            <li><a href="<?php echo get_theme_field('header_primary_button_links_first_value', '/') ?>"><?php echo get_theme_field('header_primary_button_links_third_title', 'BanescOnline') ?></a></li>
          <?php endif; ?>
        </ul>
      </div>
    <?php else : ?>
      <a class="primary-button small with-icon" href="<?php the_theme_field('header_primary_button_link', '/'); ?>">
        <img src="<?php the_theme_field('header_primary_button_icon', get_theme_url() . '/assets/images/header/login.svg'); ?>" alt="login">
        <span><?php the_theme_field('header_primary_button_title', 'Banca Online'); ?></span>
      </a>
    <?php endif; ?>
  </div>
<?php endif; ?>