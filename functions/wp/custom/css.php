<?php

/**
 * Load css file
 */

add_action('wp_enqueue_scripts', function () {
  // All page
  wp_enqueue_style(
    'global',
    get_theme_file_uri('/assets/dist/css/global.css'),
    [],
    date_i18n(
      'YmdHis',
      filemtime(get_theme_file_path('/assets/dist/css/global.css'))
    ),
  );
  wp_enqueue_style(
    'lib-tailwind',
    get_theme_file_uri('/assets/dist/css/libs/tailwind.css'),
    [],
    date_i18n(
      'YmdHis',
      filemtime(get_theme_file_path('/assets/dist/css/libs/tailwind.css'))
    ),
  );

  // Top page
  // if (is_front_page()) {
  //   wp_enqueue_style(
  //     'page-top',
  //     get_theme_file_uri('/assets/dist/css/page/top.css'),
  //     [],
  //     date_i18n(
  //       'YmdHis',
  //       filemtime(get_theme_file_path('/assets/dist/css/page/top.css'))
  //     )
  //   );
  //   wp_enqueue_style(
  //     'lib-swiper',
  //     get_theme_file_uri('/assets/dist/css/libs/swiper.css'),
  //     [],
  //     date_i18n(
  //       'YmdHis',
  //       filemtime(get_theme_file_path('/assets/dist/css/libs/swiper.css'))
  //     )
  //   );
  // }
});

// Admin login page
add_action('login_enqueue_scripts', function () {
  wp_enqueue_style(
    'admin-login',
    get_theme_file_uri('/assets/dist/css/admin/login.css'),
    [],
    date_i18n(
      'YmdHis',
      filemtime(get_theme_file_path('/assets/dist/css/admin/login.css'))
    ),
  );
});

// Admin post editor
add_action('admin_init', function () {
  add_editor_style(get_theme_file_uri('/assets/dist/css/admin/editor.css'));
});
