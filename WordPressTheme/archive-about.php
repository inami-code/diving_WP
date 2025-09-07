  <?php get_header(); ?>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv sub-mv--about">
    <h1 class="sub-mv__title">About&nbsp;us</h1>
  </div>
  <!-- パンくずリスト -->
  <div class="breadcrumb">
    <div class="breadcrumb__inner inner">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>

  <div class="sub-about top-sub-about">
    <div class="sub-about__inner inner">
      <div class="sub-about__section">
        <div class="about__image-left">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_1.webp" media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_1.jpg" media="(min-width: 768px)">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_2.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_2.jpg" alt="２匹のお魚" width="345" height="228" loading="lazy">
          </picture>
        </div>
        <div class="about__image-right about__image-right--sub">
          <div class="about__lead">
            <h3 class="about__title about__title--sub">
              Dive into<br>the Ocean
            </h3>
            <div class="about__text-wrap">
              <p class="about__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="sub-gallery top-sub-gallery">
  <div class="sub-gallery__inner inner">
    <div class="sub-gallery__section-title section-header">
      <p class="section-header__en-title">Gallery</p>
      <h2 class="section-header__jp-title">フォト</h2>
    </div>
    <div class="sub-gallery__modal js-modal-overlay"></div>
    <div class="sub-gallery__items">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()): the_post(); ?>
          <?php $galleryImage = get_field('gallery'); ?>
          <?php if ($galleryImage): ?>
            <div class="sub-gallery__item js-modal-open">
              <picture>
                <img src="<?php echo esc_url($galleryImage['url']); ?>" 
                     alt="<?php echo esc_attr($galleryImage['alt']); ?>" 
                     width="<?php echo esc_url($galleryImage['width']); ?>" height="<?php echo esc_url($galleryImage['height']); ?>">
              </picture>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>


  <?php get_footer(); ?>