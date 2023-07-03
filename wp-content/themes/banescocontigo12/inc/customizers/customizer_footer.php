<?php

/**
 * Footer customizer register.
 */

function footer_customizer($wp_customize)
{
  $wp_customize->add_section(
    'footer_customizer',
    [
      'title' => 'Footer',
      'priority' => 100,
    ]
  );
  $wp_customize->add_setting('footer_legal_warning', ['default' => '<b>Aviso Legal:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed nulla et libero pretium tristique. Proin in orci arcu. Praesent quis odio tempus, blandit ex quis, porttitor lorem. Aenean felis nisl, gravida vel lacus id, cursus pretium nulla. Suspendisse ultrices enim vel accumsan rutrum. Sed sit amet vulputate lorem. Phasellus metus ex, suscipit blandit odio ac, imperdiet venenatis mi. Ut quis eros a magna ornare luctus. Phasellus sodales tortor nulla, sed varius dolor convallis id.']);
  $wp_customize->add_setting('footer_logo', ['default' => get_theme_url() . '/assets/images/footer/white-logo.svg']);
  $wp_customize->add_setting('footer_copyright', ['default' => 'Banesco © Copyright 2022. Todos los derechos reservados.']);
  $wp_customize->add_setting('footer_social_media_enable', ['default' => true]);
  $wp_customize->add_setting('footer_facebook', ['default' => 'https://www.facebook.com/BanescoUSA/']);
  $wp_customize->add_setting('footer_twitter', ['default' => 'https://twitter.com/BanescoUSA/']);
  $wp_customize->add_setting('footer_instagram', ['default' => 'https://www.instagram.com/banescousa/']);
  $wp_customize->add_setting('footer_linkedin', ['default' => 'https://www.linkedin.com/company/6715264/admin/updates/']);
  $wp_customize->add_setting('footer_youtube', ['default' => 'https://www.youtube.com/channel/UCSO98ZxCK4mU2Kjx-5_gmag/']);
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_legal_warning',
    [
      'label' => 'Legal Warning',
      'section' => 'footer_customizer',
      'type' => 'textarea'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'footer_logo',
    [
      'label'    => 'Logo',
      'section'  => 'footer_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_copyright',
    [
      'label' => 'Copyright',
      'section' => 'footer_customizer',
      'type' => 'textarea'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_social_media_enable',
    [
      'label' => 'Display Social Media',
      'section' => 'footer_customizer',
      'type' => 'checkbox'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_facebook',
    [
      'label' => 'Facebook',
      'section' => 'footer_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_twitter',
    [
      'label' => 'Twitter',
      'section' => 'footer_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_instagram',
    [
      'label' => 'Instagram',
      'section' => 'footer_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_linkedin',
    [
      'label' => 'LinkedIn',
      'section' => 'footer_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_youtube',
    [
      'label' => 'Youtube',
      'section' => 'footer_customizer',
    ]
  ));
};

add_action('customize_register', 'footer_customizer');
