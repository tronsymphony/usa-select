<div class="country-picker" tabindex="-1">
  <input type="text" value="República Dominicana" hidden>
  <button class="country-picker__inner" type="button">
    <img class="country-picker__image" src="<?php the_theme_url(); ?>/assets/images/flags/dominicana.png">
    <div class="country-picker__title">República Dominicana</div>
    <svg class="country-picker__icon">
      <use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#arrow-down" />
    </svg>
  </button>
  <div class="country-picker__dropdown">
    <ul>
      <li>
        <a href="https://www.banesco.com/">
        <img src="<?php the_theme_url(); ?>/assets/images/flags/venezuela.png">
        <span>Venezuela</span>
        </a>
      </li>
      <li>
        <a href="https://banesco.com.pa/">
        <img src="<?php the_theme_url(); ?>/assets/images/flags/panama.png">
        <span>Panamá</span>
        </a>
      </li>
      <li>
        <a href="https://banescousa.com/">
        <img src="<?php the_theme_url(); ?>/assets/images/flags/usa.png">
        <span>USA</span>
        </a>
      </li>
      <li class="active">
        <a href="https://www.banesco.com.do/">
        <img src="<?php the_theme_url(); ?>/assets/images/flags/dominicana.png">
        <span>República Dominicana</span>
        </a>
      </li>
    </ul>
  </div>
</div>
