<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--price">
  <h1 class="sub-mv__title">Price</h1>
</div>
<!-- パンくずリスト -->
<div class="breadcrumb">
  <div class="breadcrumb__inner inner">
      <?php if(function_exists('bcn_display')){
        bcn_display();
      } ?>
  </div>
</div>

<div class="sub-price top-sub-price">
  <div class="sub-price__inner inner">
    <div class="sub-price__table price-table">
      <div class="price-table__items">
        <div class="price-table__item">
          <div class="price-table__title">
            <h2 class="price-table__text">ライセンス講習</h2>
            <div class="price-table__icon">
              <svg>
                <use href="#tab_icon01">
                </use>
              </svg>
            </div>
          </div>
          <div class="price-table__content">
            <dl class="price-table__row">
              <dt class="price-table__cource">オープンウォーター<br class="u-mobile">ダイバーコース</dt>
              <dd class="price-table__price">¥50,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">アドバンスド<br class="u-mobile">オープンウォーターコース</dt>
              <dd class="price-table__price">¥60,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">レスキュー＋EFRコース</dt>
              <dd class="price-table__price">¥70,000</dd>
            </dl>
          </div>
        </div>
        <div class="price-table__item">
          <div class="price-table__title">
            <h2 class="price-table__text">体験ダイビング</h2>
            <div class="price-table__icon">
              <svg>
                <use href="#tab_icon01">
                </use>
              </svg>
            </div>
          </div>
          <div class="price-table__content">
            <dl class="price-table__row">
              <dt class="price-table__cource">ビーチ体験ダイビング<br class="u-mobile">(半日)</dt>
              <dd class="price-table__price">¥7,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">ビーチ体験ダイビング<br class="u-mobile">(1日)</dt>
              <dd class="price-table__price">¥14,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">ボート体験ダイビング<br class="u-mobile">(半日)</dt>
              <dd class="price-table__price">¥10,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">ボート体験ダイビング<br class="u-mobile">(1日)</dt>
              <dd class="price-table__price">¥18,000</dd>
            </dl>
          </div>
        </div>
        <div class="price-table__item">
          <div class="price-table__title">
            <h2 class="price-table__text">ファンダイビング</h2>
            <div class="price-table__icon">
              <svg>
                <use href="#tab_icon01">
                </use>
              </svg>
            </div>
          </div>
          <div class="price-table__content">
            <dl class="price-table__row">
              <dt class="price-table__cource">ビーチダイビング<br class="u-mobile">(2ダイブ)</dt>
              <dd class="price-table__price">¥14,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">ボートダイビング<br class="u-mobile">(2ダイブ)</dt>
              <dd class="price-table__price">¥18,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">スペシャルダイビング<br class="u-mobile">(2ダイブ)</dt>
              <dd class="price-table__price">¥24,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">ナイトダイビング<br class="u-mobile">(1ダイブ)</dt>
              <dd class="price-table__price">¥10,000</dd>
            </dl>
          </div>
        </div>
        <div class="price-table__item">
          <div class="price-table__title">
            <h2 class="price-table__text">スペシャルダイビング</h2>
            <div class="price-table__icon">
              <svg>
                <use href="#tab_icon01">
                </use>
              </svg>
            </div>
          </div>
          <div class="price-table__content">
            <dl class="price-table__row">
              <dt class="price-table__cource">貸切ダイビング<br class="u-mobile">(2ダイブ)</dt>
              <dd class="price-table__price">¥24,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">1日ダイビング<br class="u-mobile">(3ダイブ)</dt>
              <dd class="price-table__price">¥14,000</dd>
            </dl>
            <dl class="price-table__row">
              <dt class="price-table__cource">ナイトダイビング<br class="u-mobile">(2ダイブ)</dt>
              <dd class="price-table__price">¥10,000</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>