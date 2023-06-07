<?php

/**
 * Content settings
 */

// Disable automatic insert of p-tag and br-tag
remove_filter('the_content', 'wpautop');

// Disable automatic convert of symbols, etc
remove_filter('the_content', 'wptexturize');
