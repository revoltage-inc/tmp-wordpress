<?php

/**
 * DeplicatePost settings
 */

// Hide DeplicatePost in admin bar
add_action('after_switch_theme', function () {
  $current_options = get_option('duplicate_post_show_link_in');
  if (!array_key_exists('adminbar', $current_options)) {
    $update_options = $current_options;
    $update_options['adminbar'] = '0';
    update_option('duplicate_post_show_link_in', $update_options);
  }
});
