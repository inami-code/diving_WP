<?php get_header(); ?>

<div class="mv">
  <div class="mv__inner">
    <div class="mv__header">
      <h2 class="mv__title">diving</h2>
      <p class="mv__subtitle">into the ocean</p>
    </div>
    <!-- <div class="mv__header-movie mv-movie">
      <div class="mv-movie__text">
        <h2 class="mv-movie__title">diving</h2>
        <p class="mv-movie__subtitle">into the ocean</p>
      </div>
    </div> -->

    <!-- <div class="mv__bg-movie mv-movie-bg">
          <div class="mv-movie-bg__container">
            <div class="mv-movie-bg__left-image">
              <picture>
                <source
                  srcset="./assets/images/common/mv_movie-left.webp"
                  type="image/webp">
                <img
                  src="./assets/images/common/mv_movie-left.jpg"
                  alt="アニメーション左の画像"
                  width="720"
                  height="768"
                  loading="lazy"
             ></picture>
            </div>
            <div class="mv-movie-bg__right-image">
              <picture>
                <source
                  srcset="./assets/images/common/mv_movie-right.webp"
                  type="image/webp">
                <img
                  src="./assets/images/common/mv_movie-right.jpg"
                  alt="アニメーション右の画像"
                  width="720"
                  height="768"
                  loading="lazy"
             ></picture>
            </div>
          </div>
          <div class="mv-movie-bg__white"></div>
        </div> -->

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
          <div class="swiper-slide campaign__item campaign-card">
            <figure class="campaign-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_1.jpg" alt="キャンペーンライセンス取得" width="280" height="188"
                loading="lazy">
            </figure>
            <div class="campaign-card__body">
              <div class="campaign-card__category">ライセンス講習</div>
              <h3 class="campaign-card__title">ライセンス取得</h3>
            </div>
            <div class="campaign-card__bottom">
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__price">
                <p class="campaign-card__before">¥56,000</p>
                <p class="campaign-card__after">¥46,000</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide campaign__item campaign-card">
            <figure class="campaign-card__image">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_2.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_2.jpg" alt="キャンペーン貸切体験ダイビング" width="280" height="188"
                  loading="lazy">
              </picture>
            </figure>
            <div class="campaign-card__body">
              <div class="campaign-card__category">体験ダイビング</div>
              <h3 class="campaign-card__title">貸切体験ダイビング</h3>
            </div>
            <div class="campaign-card__bottom">
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__price">
                <p class="campaign-card__before">¥24,000</p>
                <p class="campaign-card__after">¥18,000</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide campaign__item campaign-card">
            <figure class="campaign-card__image">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_3.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_3.jpg" alt="キャンペーンナイトダイビング" width="280" height="188"
                  loading="lazy">
              </picture>
            </figure>
            <div class="campaign-card__body">
              <div class="campaign-card__category">体験ダイビング</div>
              <h3 class="campaign-card__title">ナイトダイビング</h3>
            </div>
            <div class="campaign-card__bottom">
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__price">
                <p class="campaign-card__before">¥10,000</p>
                <p class="campaign-card__after">¥8,000</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide campaign__item campaign-card">
            <figure class="campaign-card__image">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_4.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_4.jpg" alt="キャンペーン貸切ファンダイビング" width="280" height="188"
                  loading="lazy">
              </picture>
            </figure>
            <div class="campaign-card__body">
              <div class="campaign-card__category">ファンダイビング</div>
              <h3 class="campaign-card__title">貸切ファンダイビング</h3>
            </div>
            <div class="campaign-card__bottom">
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__price">
                <p class="campaign-card__before">¥20,000</p>
                <p class="campaign-card__after">¥16,000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <div class="campaign__button">
      <a href="campaign.html" class="button"> View more<span></span> </a>
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
              <a href="about.html" class="button">
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
          <a href="information.html" class="button">
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
      <a href="blog.html" class="button"> View more<span></span> </a>
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
      <div class="voice-cards__item voice-card">
        <div class="voice-card__container">
          <div class="voice-card__head">
            <div class="voice-card__info">
              <div class="voice-card__age">20代(女性)</div>
              <div class="voice-card__category">ライセンス講習</div>
            </div>
            <h3 class="voice-card__title">
              ここにタイトルが入ります。ここにタイトル
            </h3>
          </div>
          <figure class="voice-card__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_1.webp" type="image/webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_1.jpg" alt="お客様の顔の写真1" width="151" height="117" loading="lazy">
            </picture>
          </figure>
        </div>
        <p class="voice-card__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
      <div class="voice-cards__item voice-card">
        <div class="voice-card__container">
          <div class="voice-card__head">
            <div class="voice-card__info">
              <div class="voice-card__age">20代(男性)</div>
              <div class="voice-card__category">ファンダイビング</div>
            </div>
            <h3 class="voice-card__title">
              ここにタイトルが入ります。ここにタイトル
            </h3>
          </div>
          <figure class="voice-card__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_2.webp" type="image/webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_2.jpg" alt="お客様の顔の写真2" width="151" height="117" loading="lazy">
            </picture>
          </figure>
        </div>
        <p class="voice-card__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
    </div>
    <div class="voice__button">
      <a href="voice.html" class="button"> View more<span></span> </a>
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
        <div class="price__content">
          <h3 class="price__head">ライセンス講習</h3>
          <dl class="price__lists">
            <div class="price__lists-flex">
              <dt class="price__list-title">
                オープンウォーターダイバーコース
              </dt>
              <dd class="price__list-price">¥50,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">
                アドバンスドオープンウォーターコース
              </dt>
              <dd class="price__list-price">¥60,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">レスキュー＋EFRコース</dt>
              <dd class="price__list-price">¥70,000</dd>
            </div>
          </dl>
        </div>
        <div class="price__content">
          <h3 class="price__head">体験ダイビング</h3>
          <dl class="price__lists">
            <div class="price__lists-flex">
              <dt class="price__list-title">ビーチ体験ダイビング(半日)</dt>
              <dd class="price__list-price">¥7,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">ビーチ体験ダイビング(1日)</dt>
              <dd class="price__list-price">¥14,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">ボート体験ダイビング(半日)</dt>
              <dd class="price__list-price">¥10,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">ボート体験ダイビング(1日)</dt>
              <dd class="price__list-price">¥18,000</dd>
            </div>
          </dl>
        </div>
        <div class="price__content">
          <h3 class="price__head">ファンダイビング</h3>
          <dl class="price__lists">
            <div class="price__lists-flex">
              <dt class="price__list-title">ビーチダイビング(2ダイブ)</dt>
              <dd class="price__list-price">¥14,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">ボートダイビング(2ダイブ)</dt>
              <dd class="price__list-price">¥18,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">
                スペシャルダイビング(2ダイブ)
              </dt>
              <dd class="price__list-price">¥24,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">ナイトダイビング(1ダイブ)</dt>
              <dd class="price__list-price">¥10,000</dd>
            </div>
          </dl>
        </div>
        <div class="price__content">
          <h3 class="price__head">スペシャルダイビング</h3>
          <dl class="price__lists">
            <div class="price__lists-flex">
              <dt class="price__list-title">貸切ダイビング(2ダイブ)</dt>
              <dd class="price__list-price">¥24,000</dd>
            </div>
            <div class="price__lists-flex">
              <dt class="price__list-title">1日ダイビング(3ダイブ)</dt>
              <dd class="price__list-price">¥32,000</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
    <div class="price__button">
      <a href="price.html" class="button"> View more<span></span> </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>