<nav class="primary-navigation navigation">
  <?php wp_nav_menu([
    'theme_location' => 'primary_menu',
    'menu_class'     => 'menu-list',
  ]); ?>
  <div class="navigation__nested-menu nested-menu">
    <div class="container">
      <div class="nested-menu__inner">
        <div class="nested-menu__left">
          <div class="nested-menu__item">
            <?php wp_nav_menu([
              'theme_location' => 'primary_sub_menu_left',
              'menu_class'     => 'sub-menu-list',
            ]); ?>
          </div>
        </div>
        <div class="nested-menu__center">
          <div class="nested-menu__item">
            <?php wp_nav_menu([
              'theme_location' => 'primary_sub_menu_center',
              'menu_class'     => 'sub-menu-list',
            ]); ?>
          </div>
        </div>
        <div class="nested-menu__right">
          <div class="nested-menu__item">
            <?php wp_nav_menu([
              'theme_location' => 'primary_sub_menu_right',
              'menu_class'     => 'sub-menu-list',
            ]); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>