<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--blog">
  <h1 class="sub-mv__title">Blog</h1>
</div>
<!-- パンくずリスト -->
<div class="breadcrumb">
  <div class="breadcrumb__inner inner">
    <p class="breadcrumb__text">TOP<span>&gt;</span>ブログ一覧</p>
  </div>
</div>

<div class="sub-blog top-sub-blog">
  <div class="sub-blog__inner inner">
    <div class="sub-blog__page">
      <div class="sub-blog__content blog-cards blog-cards--2col">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()): the_post(); ?>
            <a href="<?php the_permalink();?>" class="blog-cards__item blog-card blog-card--widget">
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
      <div class="sub-blog__pagination pagination">
        <div class="pagination__prev"></div>
        <div class="pagination__number is-active pagination__number--first">
          1
        </div>
        <div class="pagination__number">2</div>
        <div class="pagination__number">3</div>
        <div class="pagination__number">4</div>
        <div class="pagination__number u-desktop">5</div>
        <div class="pagination__number u-desktop">6</div>
        <div class="pagination__next"></div>
      </div>
    </div>
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
            <a href="page-blog.html" class="article__content">
              <div class="article__item">
                <div class="article__item-left">
                  <picture>
                    <source srcset="./assets/images/common/gallery_2.webp" type="image/webp">
                    <img src="./assets/images/common/gallery_2.jpg" alt="泳ぐお魚" width="121" height="90">
                  </picture>
                </div>
                <div class="article__item-right">
                  <time class="article__date" datetime="2023-11-17">2023.11.17</time>
                  <h4 class="article__title">ライセンス取得</h4>
                </div>
              </div>
            </a>
            <a href="page-blog.html" class="article__content">
              <div class="article__item">
                <div class="article__item-left">
                  <picture>
                    <source srcset="./assets/images/common/blog_2.webp" type="image/webp">
                    <img src="./assets/images/common/blog_2.jpg" alt="泳ぐウミガメ" width="121" height="90">
                  </picture>
                </div>
                <div class="article__item-right">
                  <time class="article__date" datetime="2023-11-17">2023.11.17</time>
                  <h4 class="article__title">ウミガメと泳ぐ</h4>
                </div>
              </div>
            </a>
            <a href="page-blog.html" class="article__content">
              <div class="article__item">
                <div class="article__item-left">
                  <picture>
                    <source srcset="./assets/images/common/blog_3.webp" type="image/webp">
                    <img src="./assets/images/common/blog_3.jpg" alt="カクレクマノミ" width="121" height="90">
                  </picture>
                </div>
                <div class="article__item-right">
                  <time class="article__date" datetime="2023-11-17">2023.11.17</time>
                  <h4 class="article__title">カクレクマノミ</h4>
                </div>
              </div>
            </a>
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
              <div class="review__item">
                <div class="review__img">
                  <picture>
                    <source srcset="./assets/images/common/widget_1.webp" type="image/webp">
                    <img src="./assets/images/common/widget_1.jpg" alt="カップルの写真" width="294" height="218">
                  </picture>
                </div>
                <p class="review__age">30代(カップル)</p>
                <h4 class="review__title">
                  ここにタイトルが入ります。ここにタイトル
                </h4>
              </div>
            </div>
            <div class="widget__button">
              <a href="voice.html" class="button">
                View more<span></span>
              </a>
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
            <div class="widget__campaign-card campaign-card">
              <figure class="campaign-card__image campaign-card__image--widget">
                <picture>
                  <source srcset="./assets/images/common/campaign_1.webp" type="image/webp">
                  <img src="./assets/images/common/campaign_1.jpg" alt="キャンペーンライセンス取得" width="280" height="188"
                    loading="lazy">
                </picture>
              </figure>
              <div class="campaign-card__body campaign-card__body--widget">
                <h3 class="campaign-card__title campaign-card__title--widget">
                  ライセンス取得
                </h3>
              </div>
              <div class="campaign-card__bottom campaign-card__bottom--widget">
                <p class="campaign-card__text campaign-card__text--widget">
                  全部コミコミ(お一人様)
                </p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before campaign-card__before--widget">
                    ¥56,000
                  </p>
                  <p class="campaign-card__after campaign-card__after--widget">
                    ¥46,000
                  </p>
                </div>
              </div>
            </div>
            <div class="widget__campaign-card campaign-card">
              <figure class="campaign-card__image campaign-card__image--widget">
                <picture>
                  <source srcset="./assets/images/common/campaign_2.webp" type="image/webp">
                  <img src="./assets/images/common/campaign_2.jpg" alt="キャンペーン貸切体験ダイビング" width="280" height="188"
                    loading="lazy">
                </picture>
              </figure>
              <div class="campaign-card__body campaign-card__body--widget">
                <h3 class="campaign-card__title campaign-card__title--widget">
                  貸切体験ダイビング
                </h3>
              </div>
              <div class="campaign-card__bottom campaign-card__bottom--widget">
                <p class="campaign-card__text campaign-card__text--widget">
                  全部コミコミ(お一人様)
                </p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before campaign-card__before--widget">
                    ¥24,000
                  </p>
                  <p class="campaign-card__after campaign-card__after--widget">
                    ¥18,000
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="widget__button">
            <a href="price.html" class="button"> View more<span></span> </a>
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
            <div class="archive__lists">
              <div class="archive__list">
                <div class="archive__year js-accordion-archive is-open">
                  2023
                </div>
                <div class="archive__month-wrap is-open">
                  <a href="#" class="archive__month">3月</a>
                  <a href="#" class="archive__month">2月</a>
                  <a href="#" class="archive__month">1月</a>
                </div>
              </div>
              <div class="archive__list">
                <div class="archive__year js-accordion-archive">2022</div>
                <div class="archive__month-wrap">
                  <a href="#" class="archive__month">3月</a>
                  <a href="#" class="archive__month">2月</a>
                  <a href="#" class="archive__month">1月</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
  </div>
</div>
<?php get_footer(); ?>