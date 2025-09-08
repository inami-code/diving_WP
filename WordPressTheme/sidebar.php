<aside class="sub-blog__widget top-widget">
  <div class="sub-blog__widget-content widget">
    <div class="widget__popularity">
      <div class="widget__title widget-header">
        <div class="widget-header__icon">
          <svg>
            <use href="#tab_icon01">
            </use>
          </svg>
        </div>
        <h3 class="widget-header__title">人気記事</h3>
      </div>
      <div class="widget__article-items article">
        <?php
        $popular_args = array(
          'post_type'       => 'post',              // 投稿タイプを指定
          'meta_key'        => 'post_views_count',  // 閲覧数を指定
          'orderby'         => 'meta_value_num',    // ソートの基準を閲覧数に
          'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
          'post_status'     => 'publish',           // 投稿ステータスは公開済み
          'posts_per_page'  => 3,                   // 投稿表示件数は5件
        );
        $popular_query = new WP_Query($popular_args);
        if ($popular_query->have_posts()):
        ?>
          <?php while ($popular_query->have_posts()): $popular_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="article__content">
              <div class="article__item">
                <div class="article__item-left">
                  <?php if (get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" width="345" height="231">
                  <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage" width="345" height="231">
                  <?php endif; ?>
                </div>
                <div class="article__item-right">
                  <time class="article__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <h4 class="article__title"><?php the_title(); ?></h4>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
        <?php else: ?>
          <p>現在、人気記事はありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="widget__review">
      <div class="widget__title widget-header">
        <div class="widget-header__icon">
          <svg>
            <use href="#tab_icon01">
            </use>
          </svg>
        </div>
        <h3 class="widget-header__title">口コミ</h3>
      </div>
      <div class="widget__review-items review">
        <div class="review__items">
          <?php
          $review_args = array(
            'post_type'       => 'voice',              // 投稿タイプを指定
            'meta_key'        => 'post_views_count',  // 閲覧数を指定
            'orderby'         => 'date',    // ソートの基準を閲覧数に
            'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
            'post_status'     => 'publish',           // 投稿ステータスは公開済み
            'posts_per_page'  => 1,                   // 投稿表示件数は5件
            'post__in'        => array(223),
          );
          $review_query = new WP_Query($review_args);
          if ($review_query->have_posts()):
          ?>
            <?php while ($review_query->have_posts()): $review_query->the_post(); ?>
              <div class="review__item">
                <div class="review__img">
                  <picture>
                    <?php if (get_the_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_field('age'); ?>の画像" width="280" height="188">
                    <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/" alt="noimage" width="280" height="188">
                    <?php endif; ?>
                  </picture>
                </div>
                <?php if (get_field('age')): ?>
                  <p class="review__age"><?php the_field('age'); ?></p>
                <?php endif; ?>
                <h4 class="review__title">
                  <?php the_title(); ?>
                </h4>
              </div>
            <?php endwhile; ?>
            <div class="widget__button">
              <a href="<?php echo VOICE_URL; ?>" class="button">
                View more<span></span>
              </a>
            </div>
          <?php else: ?>
            <p>現在、口コミはありません</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <div class="widget__campaign">
      <div class="widget__title widget-header">
        <div class="widget-header__icon">
          <svg>
            <use href="#tab_icon01">
            </use>
          </svg>
        </div>
        <h3 class="widget-header__title">キャンペーン</h3>
      </div>
      <div class="widget__campaign-cards">

        <?php
        $campaign_args = array(
          'post_type'       => 'campaign',              // 投稿タイプを指定
          'meta_key'        => 'post_views_count',  // 閲覧数を指定
          'orderby'         => 'date',    // ソートの基準を閲覧数に
          'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
          'post_status'     => 'publish',           // 投稿ステータスは公開済み
          'posts_per_page'  => 2,                   // 投稿表示件数は5件
          'post__in'        => array(200, 201), // 特定の記事を表示する記述
        );
        $campaign_query = new WP_Query($campaign_args);
        if ($campaign_query->have_posts()):
        ?>
          <?php while ($campaign_query->have_posts()): $campaign_query->the_post(); ?>
            <div class="widget__campaign-card campaign-card">
              <figure class="campaign-card__image campaign-card__image--widget">
                <picture>
                  <?php if (get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_field('age'); ?>の画像" width="280" height="188">
                  <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/" alt="noimage" width="280" height="188">
                  <?php endif; ?>
                </picture>
              </figure>
              <div class="campaign-card__body campaign-card__body--widget">
                <h3 class="campaign-card__title campaign-card__title--widget">
                  <?php the_title(); ?>
                </h3>
              </div>
              <div class="campaign-card__bottom campaign-card__bottom--widget">
                <?php if (get_field('before_price') && ('after_price')): ?>
                  <p class="campaign-card__text campaign-card__text--widget">
                    全部コミコミ(お一人様)
                  </p>
                <?php endif; ?>
                <div class="campaign-card__price">
                  <?php if (get_field('before_price')): ?>
                    <p class="campaign-card__before campaign-card__before--widget">
                      ¥<?php the_field('before_price'); ?>
                    </p>
                  <?php endif; ?>
                  <?php if (get_field('after_price')): ?>
                    <p class="campaign-card__after campaign-card__after--widget">
                      ¥<?php the_field('after_price'); ?>
                    </p>
                  <?php endif; ?>
                </div>
              </div>

            </div>
          <?php endwhile; ?>
          <div class="widget__button">
            <a href="<?php echo CAMPAIGN_URL; ?>" class="button"> View more<span></span> </a>
          </div>

        <?php else: ?>
          <p>現在、キャンペーンはありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="widget__archive">
      <div class="widget__title widget-header">
        <div class="widget-header__icon">
          <svg>
            <use href="#tab_icon01">
            </use>
          </svg>
        </div>
        <h3 class="widget-header__title">アーカイブ</h3>
      </div>
      <div class="widget__archive-content archive">
        <?php
        $archives = my_custom_archives();
        if ($archives): ?>
          <div class="archive__lists">
            <?php $i = 0; ?>
            <?php foreach ($archives as $year => $months): ?>
              <div class="archive__list">
                <div class="archive__year js-accordion-archive <?php echo $i === 0 ? 'is-open' : ''; ?>">
                  <?php echo $year; ?>
                </div>
                <div class="archive__month-wrap" style="<?php echo $i === 0 ? 'display:block;' : 'display:none;'; ?>">
                  <?php foreach ($months as $month): ?>
                    <a href="<?php echo esc_url($month['url']); ?>" class="archive__month"><?php echo $month['month']; ?>月</a>
                  <?php endforeach; ?>
                </div>
              </div>
              <?php $i++; ?>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</aside>
