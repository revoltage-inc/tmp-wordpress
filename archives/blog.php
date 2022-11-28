<?php get_header(); ?>
<main class="archive-blog">
  <h2 class="title">ブログ</h2>
  <div class="blog-content">
    <div class="blog-container">
      <div class="blog-list-wrap">
        <?php if (have_posts()) : ?>
          <?php if (!empty($_GET['s'])) : ?>
            <p class="blog-search-result-message"><?php echo esc_html('“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件'); ?></p>
          <?php endif; ?>
          <ul class="blog-list">
            <?php while (have_posts()) :
              the_post(); ?>
              <li class="blog-item">
                <a class="blog-item-link" href="<?php the_permalink(); ?>">
                  <img class="blog-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="" />
                  <time class="blog-publish-date" itemprop="datePublished" datetime="<?php the_time("Y.n.d"); ?>"><?php the_time("Y.n.d"); ?></time>
                  <p class="blog-title"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </ul>
        <?php else : ?>
          <?php if (empty($_GET['s'])) : ?>
            <p>投稿された記事はありません</p>
          <?php else : ?>
            <p class="blog-search-result-message">検索されたキーワードにマッチする記事はありませんでした</p>
          <?php endif ?>
        <?php endif ?>
      </div>

      <div class="blog-sidebar">
        <div class="blog-category">
          <h3 class="blog-category-title">カテゴリー</h3>
          <?php
          $terms = get_terms([
            'taxonomy' => 'blog-category',
            'hide_empty' => false,
            'number' => 12,
            'exclude' => '',
          ]);
          if ($terms) : ?>
            <ul class="blog-category-list">
              <?php foreach ($terms as $term) : ?>
                <li class="blog-category-item">
                  <a href="<?php the_url(get_term_link($term->term_id)); ?>"><?php echo esc_html($term->name); ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>

        <div class="blog-archive">
          <h3 class="blog-archive-title">アーカイブ</h3>
          <ul class="blog-archive-list">
            <?php wp_get_archives([
              'post_type' => 'blog',
              'type' => 'monthly',
              'limit' => 12,
              'show_post_count' => 1,
            ]); ?>
          </ul>
          <form class="blog-search-form" id="blog-search-form" method="get" action="<?php echo esc_url(home_url('/blog')); ?>">
            <input type="text" name="s" id="blog-search-input" class="blog-search-input" value="<?php the_search_query(); ?>" placeholder="ブログ内を検索">
            <input type="hidden" name="post_type" value="blog">
          </form>
        </div>
      </div>
    </div>

    <?php the_pagination(); ?>
  </div>
</main>
<?php get_footer(); ?>
