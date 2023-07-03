<div class="search-input" data-id="header-search">
  <div class="search-input__inner">
    <form class="search-input__form" action="#">
      <button class="search-input__button" type="submit">
        <svg>
          <use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#search" />
        </svg>
      </button>
      <input class="search-input__entry" type="text" placeholder="<?php the_theme_field('header_search_placeholder', '¿En qué podemos ayudarte?'); ?>" />
      <button class="search-input__close" type="button">
        <svg>
          <use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#close" />
        </svg>
      </button>
    </form>
    <button class="search-input__open">
      <svg>
        <use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#search" />
      </svg>
      <span><?php the_theme_field('header_search_button', 'Buscar'); ?></span>
    </button>
  </div>
</div>
