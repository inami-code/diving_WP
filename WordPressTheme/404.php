<?php get_header(); ?>
 <!-- パンくずリスト -->
 <div class="breadcrumb breadcrumb--404">
    <div class="breadcrumb__inner inner">
      <p class="breadcrumb__text breadcrumb__text--404">
        TOP<span>&gt;</span>404
      </p>
    </div>
  </div>

  <div class="sub-404">
    <div class="sub-404__inner inner">
      <div class="sub-404__content">
        <h1 class="sub-404__title">404</h1>
        <p class="sub-404__text">
          申し訳ありません。<br>お探しのページが見つかりません。
        </p>
        <div class="sub-404__button">
          <a href="<?php echo home_url('/') ?>" class="button button--white">Page&nbsp;TOP<span></span>
          </a>
        </div>
      </div>
      <div class="sub-404__icon">
        <svg>
          <use href="#tab_icon01">
          </use>
        </svg>
      </div>
    </div>
  </div>
<?php get_footer(); ?>