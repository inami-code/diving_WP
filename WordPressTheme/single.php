<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--blog">
  <h1 class="sub-mv__title">Blog</h1>
</div>
<!-- パンくずリスト -->
<?php get_template_part('parts/breadcrumb') ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()): the_post();
    if (!is_user_logged_in() && !is_bot()) {
      setPostViews(get_the_ID());
    } ?>


    <div class="sub-blog top-sub-blog">
      <div class="sub-blog__inner inner">
        <div class="sub-blog__page page-blog">
          <div class="sub-blog__content page-blog">
            <time class="page-blog__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            <h2 class="page-blog__title"><?php the_title(); ?></h2>
            <div class="page-blog__thumbnail">
              <?php if (get_the_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" width="345" height="231">
              <?php else: ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage" width="345" height="231">
              <?php endif; ?>
            </div>
            <div class="page-blog__content">
              <?php the_content(); ?>
            </div>
          </div>

          <div class="sub-blog__pagination top-pagination pagination">
            <?php
            $prev = get_previous_post();
            if (! empty($prev)) {
              $prev_url = esc_url(get_permalink($prev->ID));
            }

            $next = get_next_post();
            if (! empty($next)) {
              $next_url = esc_url(get_permalink($next->ID));
            }
            ?>
            <div class="pagination__prev">
              <?php if (! empty($prev)) : ?>
                <a href="<?php echo $prev_url; ?>"></a>
              <?php endif; ?>
            </div>
            <div class="pagination__next pagination__next--page-blog">
              <?php if (! empty($next)) : ?>
                <a href="<?php echo $next_url; ?>"></a>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <?php get_sidebar(); ?>

      </div>

    </div>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>