<?php

/**
 * Chat customizer register.
 */

function chat_customizer($wp_customize)
{
  $wp_customize->add_section(
    'chat_customizer',
    [
      'title' => 'Chat Button',
      'priority' => 110,
    ]
  );
  $wp_customize->add_setting('chat_open_image', ['default' => get_theme_url() . '/assets/images/helper/help.svg']);
  $wp_customize->add_setting('chat_close_image', ['default' => get_theme_url() . '/assets/images/helper/close.svg']);
  $wp_customize->add_setting('chat_whatsapp_image', ['default' => get_theme_url() . '/assets/images/helper/whatsapp.svg']);
  $wp_customize->add_setting('chat_whatsapp_link', ['default' => '/']);
  $wp_customize->add_setting('chat_message_image', ['default' => get_theme_url() . '/assets/images/helper/message.svg']);
  $wp_customize->add_setting('chat_message_link', ['default' => '/']);
  $wp_customize->add_setting('chat_call_image', ['default' => get_theme_url() . '/assets/images/helper/call.svg']);
  $wp_customize->add_setting('chat_call_link', ['default' => 'tel:+123456789']);
  $wp_customize->add_setting('chat_email_image', ['default' => get_theme_url() . '/assets/images/helper/email.svg']);
  $wp_customize->add_setting('chat_email_link', ['default' => 'mailto:example@gmail.com']);
  $wp_customize->add_setting('chat_become_a_client_title', ['default' => 'Hazte cliente']);
  $wp_customize->add_setting('chat_become_a_client_link', ['default' => '/']);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'chat_open_image',
    [
      'label'    => 'Open',
      'section'  => 'chat_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'chat_close_image',
    [
      'label'    => 'Close',
      'section'  => 'chat_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'chat_whatsapp_image',
    [
      'label' => 'Whatsapp',
      'section'  => 'chat_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'chat_whatsapp_link',
    [
      'section' => 'chat_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'chat_message_image',
    [
      'label' => 'Chat',
      'section'  => 'chat_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'chat_message_link',
    [
      'section' => 'chat_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'chat_call_image',
    [
      'label' => 'Call',
      'section'  => 'chat_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'chat_call_link',
    [
      'section' => 'chat_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'chat_email_image',
    [
      'label' => 'Email',
      'section'  => 'chat_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'chat_email_link',
    [
      'section' => 'chat_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'chat_become_a_client_title',
    [
      'label' => 'Become a Client',
      'section' => 'chat_customizer'
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'chat_become_a_client_link',
    [
      'section' => 'chat_customizer'
    ]
  ));
};

add_action('customize_register', 'chat_customizer');
