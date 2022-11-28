<?php ?>
<?php get_header(); ?>
<main class="single-post-blog">
  <div class="blog">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <time class="blog-publish-date" itemprop="datePublished" datetime="<?php the_time("Y.n.j"); ?>"><?php the_time("Y年n月j日"); ?></time>
        <h2 class="blog-title"><?php the_title(); ?></h2>
        <div class="blog-content"><?php the_content(); ?></div>
      <?php endwhile; ?>
    <?php endif ?>
  </div>
</main>
<?php get_footer(); ?>
