<?php

/**
 * Customizer settings
 */

// Add item
add_action('customize_register', function ($wp_customize) {
  // Email
  $wp_customize->add_setting('contact_email');
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'contact_email',
      [
        'label' => __('メールアドレス', 'Email'),
        'section' => 'title_tagline',
        'settings' => 'contact_email',
        'priority' => 20,
      ]
    )
  );

  // Open time
  $wp_customize->add_setting('contact_open');
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'contact_open',
      [
        'label' => __('営業時間', 'Open'),
        'section' => 'title_tagline',
        'settings' => 'contact_open',
        'priority' => 20,
      ]
    )
  );

  // Address
  $wp_customize->add_setting('address');
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'address',
      [
        'label' => __('住所', 'Address'),
        'section' => 'title_tagline',
        'settings' => 'address',
        'priority' => 20,
      ]
    )
  );

  // Tel
  $wp_customize->add_setting('contact_telephone');
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'contact_telephone',
      [
        'label' => __('電話番号', 'Telephone'),
        'section' => 'title_tagline',
        'settings' => 'contact_telephone',
        'priority' => 20,
      ]
    )
  );
});
