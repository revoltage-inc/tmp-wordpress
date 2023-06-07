<?php

/**
 * Archive page settings
 */

// Remove unnecessary part of the_archive_title
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果:' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }
  return $title;
});

// Max quota of posts displayed
add_action('pre_get_posts', function ($query) {
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  $query->set('post_status', 'publish');

  if ($query->is_post_type_archive('blog')) {
    $query->set('posts_per_page', '6');
    return;
  }
});
