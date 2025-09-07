<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--campaign">
  <h1 class="sub-mv__title">Campaign</h1>
</div>
<!-- パンくずリスト -->
<div class="breadcrumb">
  <div class="breadcrumb__inner inner">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>


<div class="sub-campaign top-sub-campaign">
  <div class="sub-campaign__inner inner">
    <div class="sub-campaign__category sub-category">
      <div class="sub-category__items">
        <div class="sub-category__item"><a class="is-active" href="<?php echo get_post_type_archive_link('campaign') ?>">ALL</a></div>
        <?php $genre_terms = get_terms('campaign_genre', array('hide_empty' => false));
        foreach ($genre_terms as $genre_term) :
        ?>
          <div class="sub-category__item"><a href="<?php echo esc_url(get_term_link($genre_term, 'campaign_genre')); ?>"><?php echo esc_html($genre_term->name); ?></a></div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
    <div class="sub-campaign__content">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()): the_post(); ?>

          <div class="sub-campaign__card campaign-card">
            <figure class="campaign-card__image">
              <?php if (get_the_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" width="280" height="188">
              <?php else: ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/" alt="noimage" width="280" height="188">
              <?php endif; ?>
            </figure>
            <div class="campaign-card__body campaign-card__body--sub-page">
              <div class="campaign-card__category campaign-card__category--sub-page">
                <?php echo get_the_terms(get_the_ID(), 'campaign_genre')[0]->name; ?>
              </div>
              <h2 class="campaign-card__title campaign-card__title--sub-page">
                <?php the_title(); ?>
              </h2>
            </div>
            <div class="campaign-card__bottom campaign-card__bottom--sub-page">
              <div class="campaign-card__h-wrap">
                <?php if (get_field('before_price') && ('after_price')): ?>
                  <p class="campaign-card__text campaign-card__text--sub-page">
                    全部コミコミ(お一人様)
                  </p>
                <?php endif; ?>
                <div class="campaign-card__price campaign-card__price--sub-page">
                  <?php if (get_field('before_price')): ?>
                    <p class="campaign-card__before">¥<?php the_field('before_price'); ?></p>
                  <?php endif; ?>
                  <?php if (get_field('after_price')): ?>
                    <p class="campaign-card__after">¥<?php the_field('after_price'); ?></p>
                  <?php endif; ?>
                </div>
                <div class="campaign-card__pc-wrap u-desktop">
                  <?php if (get_field('description')): ?>
                    <p class="campaign-card__description">
                      <?php the_field('description') ?>
                    </p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="campaign-card__f-wrap">
                <div class="campaign-card__date">
                  <?php
                  $start = get_field('start_date');
                  $end   = get_field('end_date');

                  if ($start && $end) {
                    $start_obj = new DateTime($start);
                    $end_obj   = new DateTime($end);

                    // 年が同じ場合
                    if ($start_obj->format('Y') === $end_obj->format('Y')) {
                      echo $start_obj->format('Y/n/j') . ' - ' . $end_obj->format('n/j');
                    } else {
                      // 年が異なる場合
                      echo $start_obj->format('Y/n/j') . ' - ' . $end_obj->format('Y/n/j');
                    }
                  }
                  ?></div>


                <div class="campaign-card__info">
                  ご予約・お問い合わせはコチラ
                </div>
                <div class="campaign-card__button">
                  <a href="<?php echo CONTACT_URL; ?>" class="button">Contact us<span></span></a>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php get_template_part('parts/pagination') ?>
  </div>
</div>

<?php get_footer(); ?>