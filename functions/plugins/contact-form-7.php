<?php

/**
 * ContactForm7 settings
 */

// Get post title
add_action('wpcf7_init', function () {
  wpcf7_add_form_tag(
    'title',
    function ($post_title) {
      $post_title = get_the_title();
      return $post_title;
    },
    ['name-attr' => true]
  );
}, 10, 0);

// Substitute post title to <input type="hidden">
add_filter('wpcf7_form_tag', function ($scanned_tag, $replace) {
  if (!empty($scanned_tag)) {
    if ($scanned_tag['name'] == 'post_title') {
      $post_title = get_the_title();
      $scanned_tag['values'][] = $post_title;
    }
  }
  return $scanned_tag;
}, 11, 2);

// Disable automatic insert p-tag
add_filter('wpcf7_autop_or_not', '__return_false');
