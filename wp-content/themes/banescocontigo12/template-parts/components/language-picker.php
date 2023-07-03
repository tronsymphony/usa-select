<div class="language-picker" tabindex="-1">
  <button class="language-picker__inner" type="button">
    <div class="language-picker__title"><?php the_theme_field('header_languages_button_title', 'ESP'); ?></div>
    <svg class="language-picker__icon">
      <use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#arrow-down" />
    </svg>
  </button>
  <div class="language-picker__dropdown">
    <ul>
      <li class="active">
        <a href="<?php the_theme_field('header_languages_button_links_first_link', '/'); ?>"><?php the_theme_field('header_languages_button_links_first_title', 'Español'); ?></a>
      </li>
      <li>
        <a href="<?php the_theme_field('header_languages_button_links_second_link', '/'); ?>"><?php the_theme_field('header_languages_button_links_second_title', 'English'); ?></a>
      </li>
      <li>
        <a href="<?php the_theme_field('header_languages_button_links_third_link', '/'); ?>"><?php the_theme_field('header_languages_button_links_third_title', 'Português'); ?></a>
      </li>
    </ul>
  </div>
</div>