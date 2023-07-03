<?php

/**
 * Currency customizer register.
 */

function currency_customizer($wp_customize)
{
  $wp_customize->add_section(
    'currency_customizer',
    [
      'title' => 'Currency Settings',
      'priority' => 113,
    ]
  );
  $wp_customize->add_setting('currency_usd_rate_buy', ['default' => '56.396872']);
  $wp_customize->add_setting('currency_usd_rate_sell', ['default' => '56.641826']);
  $wp_customize->add_setting('currency_eur_rate_buy', ['default' => '61.494691']);
  $wp_customize->add_setting('currency_eur_rate_sell', ['default' => '61.764052']);
  $wp_customize->add_setting('currency_last_date', ['default' => '2023-01-26']);
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'currency_usd_rate_buy',
    [
      'label' => 'USD to DOP (BUY)',
      'section' => 'currency_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'currency_usd_rate_sell',
    [
      'label' => 'USD to DOP (SELL)',
      'section' => 'currency_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'currency_eur_rate_buy',
    [
      'label' => 'EUR to DOP (BUY)',
      'section' => 'currency_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'currency_eur_rate_sell',
    [
      'label' => 'EUR to DOP (SELL)',
      'section' => 'currency_customizer',
    ]
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'currency_last_date',
    [
      'label' => 'Date of last update',
      'section' => 'currency_customizer',
    ]
  ));
};

add_action('customize_register', 'currency_customizer');
