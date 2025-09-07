<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--voice">
  <h1 class="sub-mv__title">Voice</h1>
</div>
<!-- パンくずリスト -->
<div class="breadcrumb">
  <div class="breadcrumb__inner inner">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>

<div class="sub-voice top-sub-voice">
  <div class="sub-voice__inner inner">
    <div class="sub-voice__category sub-category">
      <div class="sub-category__items">
        <div class="sub-category__item"><a href="<?php echo get_post_type_archive_link('voice') ?>">ALL</a></div>
        <?php $genre_terms = get_terms('voice_genre', array('hide_empty' => false));
        foreach ($genre_terms as $genre_term) :
        ?>
          <?php
          $cat = get_queried_object();
          $cat_name = $cat->name;
          ?>
          <div class="sub-category__item">
            <a class="<?php
                      if ($cat_name == esc_html($genre_term->name)) {
                        echo "is-active";
                      } ?>" href="<?php echo esc_url(get_term_link($genre_term, 'voice_genre')); ?>"><?php echo esc_html($genre_term->name); ?></a>
          </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
    <div class="sub-voice__voice-cards voice-cards">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()): the_post(); ?>

          <div class="sub-voice__voice-card voice-card">
            <div class="voice-card__container">
              <div class="voice-card__head">
                <div class="voice-card__info">
                  <?php if (get_field('age')): ?>
                    <div class="voice-card__age"><?php the_field('age'); ?></div>
                  <?php endif; ?>
                  <?php

                  $terms = get_the_terms(get_the_ID(), 'voice_genre');
                  if ($terms && ! is_wp_error($terms)) :
                  ?>
                    <div class="voice-card__category">
                      <?php echo esc_html($terms[0]->name); ?>
                    </div>
                  <?php endif; ?>

                </div>
                <h2 class="voice-card__title">
                  <?php the_title(); ?>
                </h2>
              </div>
              <figure class="voice-card__image">
                <picture>
                  <?php if (get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_field('age'); ?>の画像" width="280" height="188">
                  <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/" alt="noimage" width="280" height="188">
                  <?php endif; ?>
                </picture>
              </figure>
            </div>
            <p class="voice-card__text">
              <?php the_content(); ?>
            </p>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php get_template_part('parts/pagination') ?>

  </div>
  <?php get_footer(); ?>