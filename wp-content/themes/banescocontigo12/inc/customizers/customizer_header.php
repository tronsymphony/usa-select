<?php

/**
 * Header customizer register.
 */

function header_customizer($wp_customize)
{
  $wp_customize->add_section(
    'header_customizer',
    [
      'title' => 'Header',
      'description' => 'Navigation settings are in Menus',
      'priority' => 100,
    ]
  );
  $wp_customize->add_setting('header_locations_button_title', ['default' => 'Ubícanos']);
  $wp_customize->add_setting('header_locations_button_icon', ['default' => get_theme_url() . '/assets/images/header/sucursales.svg']);
  $wp_customize->add_setting('header_locations_button_link', ['default' => '/ubicaciones/']);
  $wp_customize->add_setting('header_languages_button_title', ['default' => 'ESP']);
  $wp_customize->add_setting('header_languages_button_links_first_title', ['default' => 'Español']);
  $wp_customize->add_setting('header_languages_button_links_first_link', ['default' => '/']);
  $wp_customize->add_setting('header_languages_button_links_second_title', ['default' => 'English']);
  $wp_customize->add_setting('header_languages_button_links_second_link', ['default' => '/']);
  $wp_customize->add_setting('header_languages_button_links_third_title', ['default' => 'Português']);
  $wp_customize->add_setting('header_languages_button_links_third_link', ['default' => '/']);
  $wp_customize->add_setting('header_logo', ['default' => get_theme_url() . '/assets/images/header/logo.png']);
  $wp_customize->add_setting('header_logotype', ['default' => get_theme_url() . '/assets/images/header/logotype.png']);
  $wp_customize->add_setting('header_search_button', ['default' => 'Buscar']);
  $wp_customize->add_setting('header_search_placeholder', ['default' => '¿En qué podemos ayudarte?']);
  $wp_customize->add_setting('header_primary_button_type', ['default' => 'picker']);
  $wp_customize->add_setting('header_primary_button_icon', ['default' => get_theme_url() . '/assets/images/header/login.svg']);
  $wp_customize->add_setting('header_primary_button_title', ['default' => 'Banca Online']);
  $wp_customize->add_setting('header_primary_button_link', ['default' => '/']);
  $wp_customize->add_setting('header_primary_button_links_first_title', ['default' => 'BanescoMóvil']);
  $wp_customize->add_setting('header_primary_button_links_first_link', ['default' => '/']);
  $wp_customize->add_setting('header_primary_button_links_second_title', ['default' => 'Banca Empresarial']);
  $wp_customize->add_setting('header_primary_button_links_second_link', ['default' => '/']);
  $wp_customize->add_setting('header_primary_button_links_third_title', ['default' => 'BanescOnline']);
  $wp_customize->add_setting('header_primary_button_links_third_link', ['default' => '/']);
  $wp_customize->add_setting('header_outlined_button_icon', ['default' => get_theme_url() . '/assets/images/header/clients.svg']);
  $wp_customize->add_setting('header_outlined_button_title', ['default' => 'Hazte cliente']);
  $wp_customize->add_setting('header_outlined_button_link', ['default' => '/']);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'header_locations_button_icon',
    [
      'label' => 'Locations',
      'section'  => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_locations_button_title',
    [
      'section' => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_locations_button_link',
    [
      'section' => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_languages_button_title',
    [
      'label' => 'Languages',
      'section' => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_languages_button_links_first_title',
    [
      'description' => 'links:',
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_languages_button_links_first_link',
    [
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_languages_button_links_second_title',
    [
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_languages_button_links_second_link',
    [
      'section' => 'header_customizer'
    ]
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_languages_button_links_third_title',
    [
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_languages_button_links_third_link',
    [
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'header_logotype',
    [
      'label'    => 'Logotype',
      'section'  => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'header_logo',
    [
      'label'    => 'Logo Mini',
      'section'  => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_search_button',
    [
      'label' => 'Search',
      'section' => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_search_placeholder',
    [
      'section' => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_type',
    [
      'label' => 'Primary button',
      'section' => 'header_customizer',
      'type'           => 'radio',
      'choices'        => [
        'picker'   => 'Picker',
        'link'  => 'Link'
      ]
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_title',
    [
      'section' => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'header_primary_button_icon',
    [
      'section'  => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_link',
    [
      'section' => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_links_first_title',
    [
      'description' => 'links:',
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_links_first_link',
    [
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_links_second_title',
    [
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_links_second_link',
    [
      'section' => 'header_customizer'
    ]
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_links_third_title',
    [
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_primary_button_links_third_link',
    [
      'section' => 'header_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'header_outlined_button_icon',
    [
      'label' => 'Outlined button',
      'section'  => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_outlined_button_title',
    [
      'section' => 'header_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'header_outlined_button_link',
    [
      'section' => 'header_customizer',
    ]
  ));

};

add_action('customize_register', 'header_customizer');
