<?php

/**
 * All-in-One WP Migration settings
 */

// Exclude specific files and directories from being backed up
add_filter('ai1wm_exclude_themes_from_export', function ($exclude) {
  $theme_path = get_template();
  array_push($exclude, [
    $theme_path . '/node_modules',
    $theme_path . '/.git',
    $theme_path . '/.history',
    $theme_path . '/.DS_Store',
    $theme_path . '/__MACOSX',
    $theme_path . '/Thumbs.db',
  ]);
  return $exclude;
});
