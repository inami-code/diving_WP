<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--contact">
  <h1 class="sub-mv__title">Contact</h1>
</div>
<!-- パンくずリスト -->
<?php get_template_part('parts/breadcrumb') ?>


<div class="sub-contact top-sub-contact">
  <div class="sub-contact__inner inner">

    <div class="sub-contact__form form">
      <span class="error-message">※必須項目が入力されていません。入力してください。</span>

      <?php echo do_shortcode('[contact-form-7 id="24f5653" title="お問い合わせ"]'); ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>