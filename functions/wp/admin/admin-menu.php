<?php

/**
 * Admin menu settings
 */

add_action('admin_menu', function () {
  // Remove unnecessary menu
  remove_menu_page('edit.php');
  remove_menu_page('upload.php');
  remove_menu_page('edit-comments.php');
  remove_menu_page('edit.php?post_type=wp_block');

  // Remove unnecessary sub menu
  remove_submenu_page('index.php', 'index.php'); // Dashboard > Home
}, 9999);

// Hide Welcome! panel
remove_action('welcome_panel', 'wp_welcome_panel');
