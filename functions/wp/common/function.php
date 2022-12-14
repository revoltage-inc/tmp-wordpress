<?php

/**
 * Custom function settings
 */

// Output URL
function the_url($path) {
  echo esc_url(home_url($path));
}

// Output image URL
function the_img_url($path) {
  echo esc_url(get_stylesheet_directory_uri() . '/assets/dist/img/' . $path);
}

// Output pagination bar
function the_pagination() {
  the_posts_pagination([
    'prev_next' => true,
    'mid_size' => '4',
    'prev_text' => '＜',
    'next_text' => '＞',
    'screen_reader_text' => 'ページネーション',
    'type' => 'list',
  ]);
}

// Load component file with shortcode
add_shortcode('component', function ($params = []) {
  extract(shortcode_atts(['file' => 'default'], $params));
  ob_start();
  include(STYLESHEETPATH . "/components/{$file}.php");
  return ob_get_clean();
});

// Output SVG tag
function the_svg($path, $class = null, $style = null) {
  // HACK: Allow self-certificate
  $options = [
    'ssl' => [
      'allow_self_signed' => true,
    ],
  ];

  // HACK: Add authentication header when basic authentication is applied
  if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    $options['http'] = [
      'method' => 'GET',
      'header' => 'Authorization: Basic ' . base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $_SERVER['PHP_AUTH_PW'])
    ];
  }

  $svg_file_path = get_theme_file_uri('/assets/dist/svg/' . $path);
  $svg_file = file_get_contents($svg_file_path, false, stream_context_create($options));
  if (!$svg_file) {
    throw new Exception("Not found svg file: $svg_file_path");
  }

  $dom = new DOMDocument();
  $dom->loadXML($svg_file);
  $svg = $dom->getElementsByTagName('svg')[0];
  if (!$svg) {
    throw new Exception("Not found svg tag: $svg_file_path");
  }

  if ($class) {
    $svg->setAttribute('class', $class);
  }
  if ($style) {
    $svg->setAttribute('style', $style);
  }

  echo $dom->saveHTML();
}
