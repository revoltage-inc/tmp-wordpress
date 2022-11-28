<?php

/**
 * SEO SIMPLE PACK settings
 */

// Set the "front page" title tag
add_action('after_switch_theme', function () {
  $current_options = get_option('ssp_settings');
  if (!array_key_exists('home_title', $current_options) || $current_options['home_title'] == '%_site_title_% %_sep_% %_tagline_%') {
    $update_options = $current_options;
    $update_options['home_title'] = '%_site_title_%';
    update_option('ssp_settings', $update_options);
  }
});
