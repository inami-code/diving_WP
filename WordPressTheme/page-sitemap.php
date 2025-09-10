<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--sitemap">
  <h1 class="sub-mv__title">Site&nbsp;MAP</h1>
</div>
<!-- パンくずリスト -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="sub-sitemap top-sub-sitemap">
  <div class="sub-sitemap__inner inner">
    <div class="sub-sitemap__content">
      <nav class="sub-sitemap__sp-nav sp-nav">
        <div class="sp-nav__items sp-nav__items-sitemap">
          <div class="sp-nav__left-text sp-nav__left-text--sitemap">
            <div class="sp-nav__text-wrap">
              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="campaign.html">キャンペーン</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="campaign.html">ライセンス取得</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="campaign.html">貸切体験ダイビング</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="campaign.html">ナイトダイビング</a>
                </li>
              </ul>

              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="about.html">私たちについて</a>
                </li>
              </ul>
            </div>
            <div class="sp-nav__text-wrap">
              <ul class="sp-nav__container sp-nav__container--mt sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="information.html">ダイビング情報</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="information.html?active-tab=tab-1">ライセンス講習</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="information.html?active-tab=tab-3">体験ダイビング</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="information.html?active-tab=tab-2">ファンダイビング</a>
                </li>
              </ul>

              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="blog.html">ブログ</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="sp-nav__right-text sp-nav__right-text--sitemap">
            <div class="sp-nav__text-wrap">
              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="voice.html">お客様の声</a>
                </li>
              </ul>

              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="price.html">料金一覧</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="#">ライセンス講習</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="#">体験ダイビング</a>
                </li>
                <li class="sp-nav__item sp-nav__item--black">
                  <a href="#">ファンダイビング</a>
                </li>
              </ul>
            </div>

            <div class="sp-nav__text-wrap">
              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="faq.html">よくある質問</a>
                </li>
              </ul>

              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="privacy-policy.html">プライバシー<br class="u-mobile">ポリシー</a>
                </li>
              </ul>

              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="terms-of-service.html">利用規約</a>
                </li>
              </ul>

              <ul class="sp-nav__container sp-nav__container--blue">
                <li class="sp-nav__item sp-nav__item--black sp-nav__item--bold">
                  <a href="contact.html">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<?php get_footer(); ?>