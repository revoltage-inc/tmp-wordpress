<?php

/**
 * Load js file
 */

add_action('wp_footer', function () {
  // All page
  wp_enqueue_script(
    'globals',
    get_theme_file_uri('/assets/dist/js/globals.js'),
    [],
    date_i18n(
      'YmdHis',
      filemtime(get_theme_file_path('/assets/dist/js/globals.js'))
    )
  );

  // Top page
  if (is_front_page()) {
    wp_enqueue_script(
      'page-top',
      get_theme_file_uri('/assets/dist/js/pages/top.js'),
      [],
      date_i18n(
        'YmdHis',
        filemtime(get_theme_file_path('/assets/dist/js/pages/top.js'))
      )
    );
  }

  // Thanks page
  if (is_page('thanks')) {
    wp_enqueue_script(
      'page-thanks',
      get_theme_file_uri('/assets/dist/js/pages/thanks.js'),
      [],
      date_i18n(
        'YmdHis',
        filemtime(get_theme_file_path('/assets/dist/js/pages/thanks.js'))
      )
    );
  }

  // Contact page
  if (is_page('contact')) {
    wp_enqueue_script(
      'page-contact',
      get_theme_file_uri('/assets/dist/js/pages/contact.js'),
      [],
      date_i18n(
        'YmdHis',
        filemtime(get_theme_file_path('/assets/dist/js/pages/contact.js'))
      )
    );

    wp_enqueue_script(
      'lib-yubinbango',
      get_theme_file_uri('/assets/dist/js/lib/yubinbango.js'),
      [],
      date_i18n(
        'YmdHis',
        filemtime(get_theme_file_path('/assets/dist/js/lib/yubinbango.js'))
      )
    );
  }
});

// Admin login page
add_action('login_enqueue_scripts', function () {
  wp_enqueue_script(
    'lib-modernizr',
    get_theme_file_uri('/assets/dist/js/lib/modernizr.js'),
    [],
    date_i18n(
      'YmdHis',
      filemtime(get_theme_file_path('/assets/dist/js/lib/modernizr.js'))
    )
  );
});

// ESMを使うときは、scriptタグのtype属性をmoduleに書き換える
add_filter('script_loader_tag', function ($tag, $handle, $src) {
  if (in_array($handle, ['globals', 'page-top', 'page-contact'])) {
    $tag = str_replace('text/javascript', 'module', $tag);
  }
  return $tag;
}, 10, 3);
