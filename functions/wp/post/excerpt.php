<?php

/**
 * Excerpt settings
 */

// Change display character max quota
add_filter('excerpt_length', function () {
  return 100;
}, 999);

// Change ellipsis
add_filter('excerpt_more', function () {
  return '…';
});

// Disable automatic insert of p-tag and br-tag
remove_filter('the_excerpt', 'wpautop');

// Disable automatic convert of symbols, etc
remove_filter('the_excerpt', 'wptexturize');
