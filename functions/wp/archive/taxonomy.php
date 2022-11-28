<?php

/**
 * Taxonomy settings
 */

global $taxonomies;
$taxonomies = [
  'blog' => [
    'label' => 'カテゴリー',
  ],
];

//  タクソノミーを追加
add_action('init', function () {
  global $taxonomies;

  foreach ($taxonomies as $post_type_name => $taxonomy) {
    register_taxonomy(
      $post_type_name . '-category',
      $post_type_name,
      [
        'hierarchical' => true,
        'update_count_callback' => '_update_post_term_count',
        'label' => $taxonomy['label'],
        'singular_label' => $taxonomy['label'],
        'public' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true
      ]
    );
  }
});

// カテゴリー・タクソノミー・タグ・タームスラッグを自動で英語にする
// add_action('create_blog_category', function () {
//   $tax = str_replace('create_', '', current_filter());
//   $term = get_term($term_id, $tax);
//   if (preg_match('/(%[0-9a-f]{2})+/', $term->slug)) {
//     $args = [
//       'slug' => '_category' . $term->term_id
//     ];
//     wp_update_term($term_id, $tax, $args);
//   }
// }, 10);
