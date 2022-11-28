<?php

/**
 * Flamingo settings
 */

// csv garbled measures
add_filter('flamingo_csv_quotation', function ($input) {
  return mb_convert_encoding($input, "SJIS", "UTF-8");
}, 11);
