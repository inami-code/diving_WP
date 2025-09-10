<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--info">
  <h1 class="sub-mv__title">Information</h1>
</div>
<!-- パンくずリスト -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="sub-info top-sub-info">
  <div class="sub-info__inner inner">
    <div class="sub-info__tab-nav tab-menu">
      <nav class="tab-menu__container">
        <ul class="tab-menu__items">
          <li class="tab-menu__item js-tab-item is-active" data-tab="tab-1">
            <div class="tab-menu__icon">
              <svg>
                <use href="#tab_icon01">
                </use>
              </svg>
            </div>
            <p class="tab-menu__title">
              ライセンス<br class="u-mobile">講習
            </p>
          </li>
          <li class="tab-menu__item js-tab-item" data-tab="tab-2">
            <div class="tab-menu__icon">
              <svg>
                <use href="#tab_icon02">
                </use>
              </svg>
            </div>
            <p class="tab-menu__title">
              ファン<br class="u-mobile">ダイビング
            </p>
          </li>
          <li class="tab-menu__item js-tab-item" data-tab="tab-3">
            <div class="tab-menu__icon">
              <svg>
                <use href="#tab_icon03">
                </use>
              </svg>
            </div>
            <div class="tab-menu__title">
              体験<br class="u-mobile">ダイビング
            </div>
          </li>
        </ul>
      </nav>
    </div>
    <div class="sub-info__tab-content tab-content">
      <div class="tab-content__content js-tab-content is-active" data-tab="tab-1">
        <div class="tab-content__left">
          <h2 class="tab-content__title">ライセンス講習</h2>
          <div class="tab-content__text">
            泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
          </div>
        </div>
        <div class="tab-content__right">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info_diver.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info_diver.jpg" alt="ダイビングしている写真" width="297" height="189">
          </picture>
        </div>

      </div>
      <div id="tab2" class="tab-content__content js-tab-content" data-tab="tab-2">
        <div class="tab-content__left">
          <h2 class="tab-content__title">ファンダイビング</h2>
          <div class="tab-content__text">
            ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
          </div>
        </div>
        <div class="tab-content__right">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_3.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_3.jpg" alt="海の中たくさんの魚の画像" width="297" height="189">
          </picture>
        </div>

      </div>
      <div id="tab3" class="tab-content__content js-tab-content" data-tab="tab-3">
        <div class="tab-content__left">
          <h2 class="tab-content__title">体験ダイビング</h2>
          <div class="tab-content__text">
            ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
          </div>
        </div>
        <div class="tab-content__right">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_1.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_1.jpg" alt="海の中2匹の魚の画像" width="297" height="189">
          </picture>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>