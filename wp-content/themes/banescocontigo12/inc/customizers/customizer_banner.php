<?php

/**
 * Banner customizer register.
 */

function banner_customizer($wp_customize)
{
  $wp_customize->add_section(
    'banner_customizer',
    [
      'title' => 'Banner',
      'priority' => 111,
    ]
  );
  $wp_customize->add_setting('banner_image', ['default' => get_theme_url() . '/assets/images/header/banner.png']);
  $wp_customize->add_setting('banner_title', ['default' => 'Banesco Venezuela']);
  $wp_customize->add_setting('banner_description', ['default' => 'Descarga nuestra Banca Móvil']);
  $wp_customize->add_setting('banner_button_title', ['default' => 'Ver']);
  $wp_customize->add_setting('banner_button_link', ['default' => '/']);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'banner_image',
    [
      'label'    => 'Image',
      'section'  => 'banner_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'banner_title',
    [
      'label' => 'Title',
      'section' => 'banner_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'banner_description',
    [
      'label' => 'Description',
      'section' => 'banner_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'banner_button_title',
    [
      'label' => 'Primary Button',
      'section' => 'banner_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'banner_button_link',
    [
      'section' => 'banner_customizer'
    ]
  ));
};

add_action('customize_register', 'banner_customizer');
