<?php get_header(); ?>
 <!-- 下層ページのメインビュー -->
 <div class="sub-mv sub-mv--contact">
    <h1 class="sub-mv__title">Contact</h1>
  </div>
  <!-- パンくずリスト -->
  <div class="breadcrumb">
    <div class="breadcrumb__inner inner">
      <p class="breadcrumb__text">
              <?php if(function_exists('bcn_display')){
                bcn_display();
              } ?>
      </p>
    </div>
  </div>

  <div class="sub-contact-thanks top-sub-contact-thanks">
    <div class="sub-contact-thanks__inner inner">
      <div class="sub-contact-thanks__contact">
        <p class="sub-contact-thanks__text">
          お問い合わせ内容を送信完了しました。<br>
          <span>このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</span>
        </p>
      </div>
    </div>
  </div>
<?php get_footer(); ?>