<?php get_header(); ?>
 <!-- 下層ページのメインビュー -->
 <div class="sub-mv sub-mv--contact">
    <h1 class="sub-mv__title">Contact</h1>
  </div>
  <!-- パンくずリスト -->
  <div class="breadcrumb">
    <div class="breadcrumb__inner inner">
      <p class="breadcrumb__text">TOP<span>&gt;</span>お問い合わせ</p>
    </div>
  </div>

  <div class="sub-contact top-sub-contact">
    <div class="sub-contact__inner inner">
      <div class="sub-contact__form form">
        <form action="contact-thanks.html" method="post">
          <dl class="form__item">
            <dt>
              <label for="your-name">お名前<span>必須</span></label>
            </dt>
            <dd class="form__name">
              <input id="your-name" type="text" placeholder="沖縄&emsp;太郎" required>
            </dd>
          </dl>
          <dl class="form__item">
            <dt>
              <label for="your-email">メールアドレス<span>必須</span></label>
            </dt>
            <dd class="form__email">
              <input id="your-email" type="email" placeholder="aaa000@ggmail.com" required>
            </dd>
          </dl>
          <dl class="form__item">
            <dt>
              <label for="your-tel">電話番号<span>必須</span></label>
            </dt>
            <dd class="form__tel">
              <input id="your-tel" type="tel" placeholder="000-0000-0000" required>
            </dd>
          </dl>
          <dl class="form__item">
            <dt>
              <label>お問合せ項目<span>必須</span></label>
            </dt>
            <dd class="form__checkbox">
              <label><input type="checkbox" name="contact-item" value="チェックボックス1"
                  checked><span>ダイビング講習について</span></label>
              <label><input type="checkbox" name="contact-item" value="チェックボックス2"
                  checked><span>ファンデイビングについて</span></label>
              <label><input type="checkbox" name="contact-item" value="チェックボックス3"
                  checked><span>体験ダイビングについて</span></label>
            </dd>
          </dl>
          <dl class="form__item">
            <dt>
              <label for="campaign">キャンペーン</label>
            </dt>
            <dd class="form__campaign">
              <select name="campaign" class="form__select" id="campaign">
                <option value="">キャンペーン内容を選択</option>
                <option value="セレクト1">セレクト1</option>
                <option value="セレクト2">セレクト2</option>
              </select>
            </dd>
          </dl>
          <dl class="form__item">
            <dt>
              <label for="your-inquiry">お問合せ内容<span>必須</span></label>
            </dt>
            <dd class="form__textarea">
              <textarea id="your-inquiry" name="contents" required></textarea>
            </dd>
          </dl>
        </form>
        <div class="form__privacy">
          <label><input type="checkbox" checked><span>個人情報の取り扱いについて同意のうえ送信します。</span></label>
        </div>
        <div class="form__button">
          <a href="contact-thanks.html" class="button">Send<span></span></a>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>