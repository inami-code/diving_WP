<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--blog">
  <h1 class="sub-mv__title">Blog</h1>
</div>
<!-- パンくずリスト -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="sub-blog top-sub-blog">
  <div class="sub-blog__inner inner">
    <div class="sub-blog__page">
      <div class="sub-blog__content blog-cards blog-cards--2col">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card blog-card--widget">
              <figure class="blog-card__image blog-card__image--widget">
                <?php if (get_the_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" width="345" height="231">
                <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage" width="345" height="231">
                <?php endif; ?>
              </figure>
              <div class="blog-card__body">
                <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                <h2 class="blog-card__title"><?php the_title(); ?></h2>
              </div>
              <p class="blog-card__text">
                <?php the_excerpt(); ?>
              </p>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php get_template_part('parts/pagination') ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>