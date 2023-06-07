<?php

/**
 * jQuery settings
 */

// Remove loading WordPress jQuery file
add_filter('wp_default_scripts', function ($scripts) {
  // WARN: Some pages that use plugins that require jQuery, such as ContactForm7, load jQuery
  if (!is_admin() && !is_page('contact') && !is_page('contact-confirm')) {
    $scripts->remove('jquery');
    $scripts->add('jquery', false, ['jquery-core']);
  }
});

// Remove loading CDN jQuery file
add_action('wp_enqueue_scripts', function () {
  if (!is_admin() && !is_page('contact') && !is_page('contact-confirm')) {
    wp_deregister_script('jquery');
  }
});

// Remove jQuery Migrate's console output
add_action('init', function () {
  $wp_migrate = $GLOBALS['wp_scripts']->registered['jquery-migrate'];
  $wp_migrate->extra['before'][] = 'temp_jm_logconsole = window.console.log; window.console.log=null;';
  $wp_migrate->extra['after'][] = 'window.console.log=temp_jm_logconsole;';
}, 5);
