<?php

/**
 * PostTypesOrder settings
 */

// Turn off automatic sorting
add_action('after_switch_theme', function () {
  $current_options = get_option('cpto_options');
  if (!array_key_exists('autosort', $current_options)) {
    $update_options = $current_options;
    $update_options['autosort'] = 0;
    update_option('cpto_options', $update_options);
  }
});
