<?php

/**
 * Title settings
 */

// Disable automatic insert title-tag
add_theme_support('title-tag');

// Change title delimiter
add_filter('document_title_separator', function ($separator) {
  $separator = '|';
  return $separator;
});

// Disable automatic insert of p-tag and br-tag
remove_filter('the_title', 'wpautop');

// Disable automatic convert of symbols, etc
remove_filter('the_title', 'wptexturize');
