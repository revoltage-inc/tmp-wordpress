<?php

/**
 * Eye catch settings
 */

// Enable Eye catch
add_theme_support('post-thumbnails');

// Setting image size for eye catch
// remove_image_size('1536x1536', 1536, 1536, false);
// remove_image_size('2048x2048', 2048, 2048, false);

// Featured image automatic generation limit
add_filter('intermediate_image_sizes_advanced', function ($sizes) {
  unset($sizes['thumbnail']);
  unset($sizes['medium']);
  unset($sizes['1536x1536']);
  unset($sizes['2048x2048']);
  return $sizes;
});
add_filter('big_image_size_threshold', '__return_false');
update_option('medium_large_size_w', 0);

// Large size automatic setting when insert image
add_action('after_setup_theme', function () {
  update_option('image_default_align', 'none');
  update_option('image_default_link_type', 'none');
  update_option('image_default_size', 'full');
});
