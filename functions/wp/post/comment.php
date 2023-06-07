<?php

/**
 * Comment settings
 */

// Disable automatic insert of p-tag and br-tag
remove_filter('comment_text', 'wpautop');

// Disable automatic convert of symbols, etc
remove_filter('comment_text', 'wptexturize');
