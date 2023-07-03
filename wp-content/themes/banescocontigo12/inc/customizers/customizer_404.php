<?php

/**
 * 404 customizer register.
 */

function error_404_customizer($wp_customize)
{
  $wp_customize->add_section(
    '404_customizer',
    [
      'title' => '404 Page',
      'priority' => 111,
    ]
  );
  $wp_customize->add_setting('404_image', ['default' => get_theme_url() . '/blocks/src/error-404/assets/404.svg']);
  $wp_customize->add_setting('404_title', ['default' => '¡Ups! No lo encontramos']);
  $wp_customize->add_setting('404_description', ['default' => '¿Qué tal si intentas de otra manera?']);
  $wp_customize->add_setting('404_button_title', ['default' => 'Volver atrás']);
  $wp_customize->add_setting('404_button_link', ['default' => '/']);
  $wp_customize->add_setting('404_links_enable', ['default' => true]);
  $wp_customize->add_setting('404_links_title', ['default' => 'O visita las siguientes páginas:']);
  $wp_customize->add_setting('404_links_first_title', ['default' => 'Homepage']);
  $wp_customize->add_setting('404_links_first_link', ['default' => '/']);
  $wp_customize->add_setting('404_links_second_title', ['default' => 'Tarjetas']);
  $wp_customize->add_setting('404_links_second_link', ['default' => '/']);
  $wp_customize->add_setting('404_links_third_title', ['default' => 'Solicitudes']);
  $wp_customize->add_setting('404_links_third_link', ['default' => '/']);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    '404_image',
    [
      'label'    => 'Image',
      'section'  => '404_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_title',
    [
      'label' => 'Title',
      'section' => '404_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_description',
    [
      'label' => 'Description',
      'section' => '404_customizer',
      'type' => 'textarea'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_button_title',
    [
      'label' => 'Primary Button',
      'section' => '404_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_button_link',
    [
      'section' => '404_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_links_enable',
    [
      'label' => 'Display Links',
      'section' => '404_customizer',
      'type' => 'checkbox'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_links_title',
    [
      'label' => 'Subtitle',
      'section' => '404_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_links_first_title',
    [
      'description' => 'links:',
      'section' => '404_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_links_first_link',
    [
      'section' => '404_customizer'
    ]
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_links_second_title',
    [
      'section' => '404_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_links_second_link',
    [
      'section' => '404_customizer'
    ]
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_links_third_title',
    [
      'section' => '404_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    '404_links_third_link',
    [
      'section' => '404_customizer'
    ]
  ));
};

add_action('customize_register', 'error_404_customizer');
