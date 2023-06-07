<?php

/**
 * Head-tag settings
 */

// Remove wp version information
remove_action('wp_head', 'wp_generator');

// Remove parameter wp version information
function vc_remove_wp_ver_css_js($src) {
  if (strpos($src, 'ver=' . get_bloginfo('version'))) {
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter('style_loader_src', 'vc_remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'vc_remove_wp_ver_css_js', 9999);

// Remove feed link
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// Remove emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove Embedding external content
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// Remove Edit URI
remove_action('wp_head', 'rsd_link');

// Remove wlwmanifest
remove_action('wp_head', 'wlwmanifest_link');
