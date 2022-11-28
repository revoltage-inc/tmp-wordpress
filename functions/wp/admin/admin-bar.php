<?php

/**
 * Admin bar settings
 */

// Remove unnecessary menus in admin bar
add_action('admin_bar_menu', function ($wp_admin_bar) {
  $wp_admin_bar->remove_menu('wp-logo');
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_menu('customize');
  $wp_admin_bar->remove_menu('new-content');
  $wp_admin_bar->remove_menu('delete-cache');
  $wp_admin_bar->remove_menu('edit');
}, 201);

// Hide admin bar
// add_filter('show_admin_bar', '__return_false');
