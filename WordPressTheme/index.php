<?php get_header(); ?>

<!-- オープニングアニメーション -->
<div class="opening">
  <div class="opening__logo">
    <h2 class="opening__title">diving</h2>
    <p class="opening__subtitle">into the ocean</p>
  </div>

  <div class="opening__img-mask">
    <span class="opening__left">
    </span>
    <span class="opening__right">
    </span>
  </div>
  <div class="opening__img-wrap">
    <img
      src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc1.jpg"
      alt="亀の画像"
      width="720"
      height="768">
  </div>


</div>

<div class="mv">
  <div class="mv__inner">
    <div class="mv__header">
      <h2 class="mv__title">diving</h2>
      <p class="mv__subtitle">into the ocean</p>
    </div>

    <div id="movie" class="swiper mv__swiper js-mv-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc1.webp" media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc1.jpg" media="(min-width: 768px)">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sp1.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sp1.jpg" alt="メインビュー画像亀の写真" width="375" height="667" loading="lazy">
          </picture>
        </div>
        <div class="swiper-slide mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc2.webp" media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc2.jpg" media="(min-width: 768px)">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sp2.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sp2.jpg" alt="メインビュー画像海の中" width="375" height="667" loading="lazy">
          </picture>
        </div>
        <div class="swiper-slide mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc3.webp" media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc3.jpg" media="(min-width: 768px)">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sp3.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sp3.jpg" alt="メインビュー画像穏やかな海" width="375" height="667" loading="lazy">
          </picture>
        </div>
        <div class="swiper-slide mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc4.webp" media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_pc4.jpg" media="(min-width: 768px)">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sp4.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv_sp4.jpg" alt="メインビュー画像4" width="375" height="667" loading="lazy">
          </picture>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="campaign" class="campaign top-campaign">
  <div class="campaign__inner inner">
    <div class="campaign__section-title section-header">
      <p class="section-header__en-title">Campaign</p>
      <h2 class="section-header__jp-title">キャンペーン</h2>
    </div>
    <div class="campaign__swiper">
      <!-- Slider main container -->
      <div class="swiper js-campaign-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper campaign__swiper-wrapper">
          <!-- Slides -->

          <?php
          $campaign_query = new WP_Query(array(
            'post_type'       => 'campaign',          // 投稿タイプを指定
            'meta_key'        => 'post_views_count',  // 閲覧数を指定
            'orderby'         => 'date',              // ソートの基準を閲覧数に
            'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
            'post_status'     => 'publish',           // 投稿ステータスは公開済み
            'posts_per_page'  => -1,
          ));

          if ($campaign_query->have_posts()):
          ?>
            <?php while ($campaign_query->have_posts()): $campaign_query->the_post(); ?>
              <div class="swiper-slide campaign__item campaign-card">
                <figure class="campaign-card__image">
                  <?php if (get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" width="345" height="231">
                  <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage" width="345" height="231">
                  <?php endif; ?>
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__category"> <?php echo get_the_terms(get_the_ID(), 'campaign_genre')[0]->name; ?></div>
                  <h3 class="campaign-card__title"> <?php the_title(); ?></h3>
                </div>
                <div class="campaign-card__bottom">
                  <?php if (get_field('before_price') && ('after_price')): ?>
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <?php endif; ?>
                  <div class="campaign-card__price">
                    <?php if (get_field('before_price')): ?>
                      <p class="campaign-card__before">¥<?php the_field('before_price'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('after_price')): ?>
                      <p class="campaign-card__after">¥<?php the_field('after_price'); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
            <p>現在、キャンペーンはありません</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>


        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <div class="campaign__button">
      <a href="<?php echo CAMPAIGN_URL; ?>" class="button"> View more<span></span> </a>
    </div>
  </div>
</section>

<section id="about" class="about top-about">
  <div class="about__inner inner">
    <div class="about__section-title section-header">
      <p class="section-header__en-title">About us</p>
      <h2 class="section-header__jp-title">私たちについて</h2>
    </div>
    <div class="about__content">
      <div class="about__image-left">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_1.webp" media="(min-width: 768px)" type="image/webp">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_1.jpg" media="(min-width: 768px)">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_bg.webp" type="image/webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_bg.png" alt="about画像" width="345" height="212" loading="lazy">
        </picture>
      </div>
      <div class="about__image-right">
        <div class="about__lead">
          <h3 class="about__title">Dive into<br>the Ocean</h3>
          <div class="about__text-wrap">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="about__button">
              <a href="<?php echo ABOUT_URL; ?>" class="button">
                View more<span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="info" class="info top-info">
  <div class="info__inner inner">
    <div class="info__section-title section-header">
      <p class="section-header__en-title">Information</p>
      <h2 class="section-header__jp-title">ダイビング情報</h2>
    </div>
    <div class="info__container">
      <div class="info__image">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info.webp" type="image/webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info.jpg" alt="インフォメーションダイビング情報" width="345" height="227" loading="lazy">
        </picture>
      </div>
      <div class="info__lead">
        <h3 class="info__title">ライセンス講習</h3>
        <p class="info__text">
          当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
        </p>
        <div class="info__button">
          <a href="<?php echo INFO_URL; ?>" class="button">
            View more<span></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog" class="blog top-blog">
  <div class="blog__bg-image">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg.webp" type="image/webp">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg.jpg" alt="背景の海の画像" width="1440" height="831" loading="lazy">
    </picture>
  </div>
  <div class="blog__inner inner">
    <div class="blog__section-title section-header">
      <p class="section-header__en-title section-header__en-title--white">
        Blog
      </p>
      <h2 class="section-header__jp-title section-header__jp-title--white">
        ブログ
      </h2>
    </div>

    <div class="blog__content blog-cards">
      <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ（通常投稿）
        'posts_per_page' => 3, // 3件だけ表示
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
            <figure class="blog-card__image">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full', array(
                  'alt' => get_the_title() . 'のアイキャッチ画像',
                  'width' => 345,
                  'height' => 231
                )); ?>
              <?php else: ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage" width="345" height="231">
              <?php endif; ?>
            </figure>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
              <h3 class="blog-card__title"><?php the_title(); ?></h3>
            </div>
            <p class="blog-card__text">
              <?php the_excerpt(); ?>
            </p>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // クエリをリセット 
        ?>
      <?php endif; ?>
    </div>

    <div class="blog__button">
      <a href="<?php echo BLOG_URL; ?>" class="button"> View more<span></span> </a>
    </div>
  </div>
</section>

<section id="voice" class="voice top-voice">
  <div class="voice__inner inner">
    <div class="voice__section-title section-header">
      <p class="section-header__en-title">Voice</p>
      <h2 class="section-header__jp-title">お客様の声</h2>
    </div>
    <div class="voice__content voice-cards">

      <?php
      $voice_query = new WP_Query(array(
        'post_type'       => 'voice',          // 投稿タイプを指定
        'meta_key'        => 'post_views_count',  // 閲覧数を指定
        'orderby'         => 'date',              // ソートの基準を閲覧数に
        'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
        'post_status'     => 'publish',           // 投稿ステータスは公開済み
        'posts_per_page'  => 2,                   // 投稿表示件数は5件
      ));

      if ($voice_query->have_posts()):
      ?>
        <?php while ($voice_query->have_posts()): $voice_query->the_post(); ?>

          <div class="voice-cards__item voice-card">
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
                <h3 class="voice-card__title">
                  <?php the_title(); ?>
                </h3>
              </div>
              <figure class="voice-card__image">
                <picture>
                  <?php if (get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" width="280" height="188">
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
      <?php else: ?>
        <p>現在、口コミはありません</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

    </div>
    <div class="voice__button">
      <a href="<?php echo VOICE_URL; ?>" class="button"> View more<span></span> </a>
    </div>
  </div>
</section>

<section id="price" class="price top-price">
  <div class="price__inner inner">
    <div class="price__section-title section-header">
      <p class="section-header__en-title">Price</p>
      <h2 class="section-header__jp-title">料金一覧</h2>
    </div>
    <div class="price__container">
      <div class="price__image">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_pc.webp" media="(min-width: 768px)" type="image/webp">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_pc.jpg" media="(min-width: 768px)">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_sp.webp" type="image/webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_sp.jpg" alt="小魚たちが泳ぐ写真" width="345" height="227" loading="lazy">
        </picture>
      </div>
      <div class="price__menu">

        <?php
        $price_query = new WP_Query(array(
          'post_type'       => 'price',          // 投稿タイプを指定
          'meta_key'        => 'post_views_count',  // 閲覧数を指定
          'orderby'         => 'date',              // ソートの基準を閲覧数に
          'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
          'post_status'     => 'publish',           // 投稿ステータスは公開済み
          'posts_per_page'  => -1,                   // 投稿表示件数は5件
        ));

        if ($price_query->have_posts()):
        ?>
          <?php while ($price_query->have_posts()): $price_query->the_post(); ?>


            <?php
            // フィールドをすべて取得
            $courses = [
              ['course' => get_field('course'), 'price' => get_field('price')],
              ['course' => get_field('course2'), 'price' => get_field('price2')],
              ['course' => get_field('course3'), 'price' => get_field('price3')],
              ['course' => get_field('course4'), 'price' => get_field('price4')],
              ['course' => get_field('course5'), 'price' => get_field('price5')],
            ];

            // 表示できる項目があるか確認
            $has_content = false;
            foreach ($courses as $item) {
              if ($item['course'] && $item['price']) {
                $has_content = true;
                break;
              }
            }
            ?>
            <?php if ($has_content) : ?>
              <div class="price__content">
                <h3 class="price__head"><?php the_title(); ?></h3>
                <dl class="price__lists">
                  <?php foreach ($courses as $item) : ?>
                    <?php if ($item['course'] && $item['price']) : ?>
                      <div class="price__lists-flex">
                        <dt class="price__list-title">
                          <?php echo esc_html($item['course']); ?>
                        </dt>
                        <dd class="price__list-price">¥<?php echo esc_html($item['price']); ?></dd>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </dl>
              <?php endif; ?>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
            現在、料金の表示はありません。
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="price__button">
      <a href="<?php echo PRICE_URL; ?>" class="button"> View more<span></span> </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>