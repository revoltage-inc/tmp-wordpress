<?php

/**
 * Setting settings
 */

add_action('after_switch_theme', function () {
  $options = [
    // WARN: Not set without the target language pack
    'WPLANG' => 'ja',
    'time_format' => 'H:i',
    'date_format' => 'Y-m-d',
  ];

  foreach ($options as $option_name => $option_value) {
    $current_option = get_option($option_name);

    if ($current_option === false || $current_option !== $option_value) {
      update_option($option_name, $option_value);
    }
  }
});
