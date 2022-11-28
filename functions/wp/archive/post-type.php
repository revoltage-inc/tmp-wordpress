<?php

/**
 * Post type settings
 */

// List of post types to set
global $post_types;
$post_types = [
  'blog' => [
    'label' => 'ブログ',
    'menu_icon' => 'dashicons-edit',
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'revisions'],
  ]
];

// Change permalink to number based
add_filter('post_type_link', function ($link, $post) {
  global $post_types;

  if (array_key_exists($post->post_type, $post_types)) {
    return home_url('/' . $post->post_type . '/' . $post->ID);
  } else {
    return $link;
  }
}, 1, 2);

add_filter('rewrite_rules_array', function ($rules) {
  global $post_types;

  $new_rules = [];
  foreach ($post_types as $post_type_name => $post_type) {
    $new_rules[$post_type_name . '/([0-9]+)/?$'] = 'index.php?post_type=' . $post_type_name . '&p=$matches[1]';
  }
  return $new_rules + $rules;
});

// Change display order
add_filter('pre_get_posts', function ($query) {
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  $query->set('orderby', 'date publish_date');
  $query->set('order', 'asc asc');
  // $query->set('post_status', 'publish');
  // $query->set('ignore_custom_sort', true);
});

// Add Post type
add_action('init', function () {
  global $post_types;

  $menu_position = 6;
  foreach ($post_types as $post_type_name => $post_type) {
    register_post_type(
      $post_type_name,
      [
        'labels' => [
          'name' => __($post_type['label']),
          'singular_name' => __($post_type['label']),
          'all_items' => __('一覧'),
          'add_new' => _x('新規追加', $post_type['label']),
          'add_new_item' => __('新規追加'),
        ],
        'description' => $post_type['label'],
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => $post_type['has_archive'],
        'hierarchical' => false,
        'menu_position' => $menu_position++,
        'menu_icon' => $post_type['menu_icon'],
        'rewrite' => [
          'with_front' => false
        ],
        'supports' => $post_type['supports']
      ]
    );
  }
});
