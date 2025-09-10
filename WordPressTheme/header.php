<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="noindex">
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header js-header js-animation">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__logo">
          <a class="header__logo-link" href="<?php echo HOME_URL; ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups_logo.svg" alt="CodeUpsロゴ" width="102" height="38">
          </a>
        </h1>
      <?php else : ?>
        <div class="header__logo">
          <a class="header__logo-link" href="<?php echo HOME_URL; ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups_logo.svg" alt="CodeUpsロゴ" width="102" height="38">
          </a>
        </div>
      <?php endif; ?>
      <button class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__items sp-nav__items--drawer-height">
          <div class="sp-nav__left-text">
            <ul class="sp-nav__container">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo CAMPAIGN_URL; ?>">キャンペーン</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo CAMPAIGN_URL; ?>">ライセンス取得</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo CAMPAIGN_URL; ?>">貸切体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo CAMPAIGN_URL; ?>">ナイトダイビング</a>
              </li>
            </ul>

            <ul class="sp-nav__container">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo ABOUT_URL; ?>">私たちについて</a>
              </li>
            </ul>
            <ul class="sp-nav__container sp-nav__container--mt">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo INFO_URL; ?>">ダイビング情報</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo INFO_URL; ?>?active-tab=tab-1">ライセンス講習</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo INFO_URL; ?>?active-tab=tab-3">体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo INFO_URL; ?>?active-tab=tab-2">ファンダイビング</a>
              </li>
            </ul>

            <ul class="sp-nav__container">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo BLOG_URL; ?>">ブログ</a>
              </li>
            </ul>
          </div>

          <div class="sp-nav__right-text">
            <ul class="sp-nav__container">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo VOICE_URL; ?>">お客様の声</a>
              </li>
            </ul>

            <ul class="sp-nav__container">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo PRICE_URL; ?>">料金一覧</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo PRICE_URL; ?>#table1">ライセンス講習</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo PRICE_URL; ?>#table2">体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo PRICE_URL; ?>#table3">ファンダイビング</a>
              </li>
            </ul>

            <ul class="sp-nav__container sp-nav__container--mt">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo FAQ_URL; ?>">よくある質問</a>
              </li>
            </ul>

            <ul class="sp-nav__container">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo PRIVACY_URL; ?>">プライバシー<br>ポリシー</a>
              </li>
            </ul>

            <ul class="sp-nav__container">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo TERMS_URL; ?>">利用規約</a>
              </li>
            </ul>

            <ul class="sp-nav__container">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="<?php echo CONTACT_URL; ?>">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo CAMPAIGN_URL; ?>" class="pc-nav__title">
              <div class="pc-nav__en-title">Campaign</div>
              <div class="pc-nav__jp-title">キャンペーン</div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo ABOUT_URL; ?>" class="pc-nav__title">
              <div class="pc-nav__en-title">About us</div>
              <div class="pc-nav__jp-title">私たちについて</div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo INFO_URL; ?>" class="pc-nav__title">
              <div class="pc-nav__en-title">Information</div>
              <div class="pc-nav__jp-title">ダイビング情報</div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo BLOG_URL; ?>" class="pc-nav__title">
              <div class="pc-nav__en-title">Blog</div>
              <div class="pc-nav__jp-title">ブログ</div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo VOICE_URL; ?>" class="pc-nav__title">
              <div class="pc-nav__en-title">Voice</div>
              <div class="pc-nav__jp-title">お客様の声</div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo PRICE_URL; ?>" class="pc-nav__title">
              <div class="pc-nav__en-title">Price</div>
              <div class="pc-nav__jp-title">料金一覧</div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo FAQ_URL; ?>" class="pc-nav__title">
              <div class="pc-nav__en-title">FAQ</div>
              <div class="pc-nav__jp-title">よくある質問</div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo CONTACT_URL; ?>" class="pc-nav__title">
              <div class="pc-nav__en-title">Contact</div>
              <div class="pc-nav__jp-title">お問合せ</div>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>