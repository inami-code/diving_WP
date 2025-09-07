<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--faq">
  <h1 class="sub-mv__title sub-mv__title--faq">faq</h1>
</div>
<!-- パンくずリスト -->
<div class="breadcrumb">
  <div class="breadcrumb__inner inner">
    <p class="breadcrumb__text">TOP<span>&gt;</span>料金一覧</p>
  </div>
</div>

<div class="sub-faq top-sub-faq">
  <div class="sub-faq__inner inner">
    <div class="sub-faq__items">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()): the_post(); ?>

          <?php if (get_field('question') && ('answer')): ?>
            <div class="sub-faq__item faq-box">
              <div class="faq-box__q">
                <h2><?php the_field('question'); ?></h2>
                <div class="faq-box__icon">
                  <div class="faq-box__bar1"></div>
                  <div class="faq-box__bar2"></div>
                </div>
              </div>
              <div class="faq-box__a">
                <div class="faq-box__content">
                  <?php the_field('answer'); ?>
                </div>
              </div>
            </div>
          <?php endif; ?>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>