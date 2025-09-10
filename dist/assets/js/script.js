"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ------------------------------------
  //ドロワーメニュー
  // ------------------------------------
  $(".js-hamburger").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $(".js-sp-nav").fadeOut(300);
    } else {
      $(".js-hamburger").addClass("is-active");
      $(".js-header").addClass("is-active");
      $(".js-sp-nav").fadeIn(300);
    }
  });
  //中の要素をクリックすると消えてスクロールする
  $(".sp-nav__item a").on("click", function () {
    $(".js-sp-nav").fadeOut(300);
    $(".js-hamburger").removeClass("is-active");
    $(".js-header").removeClass("is-active");
  });

  // ------------------------------------
  // ハンバーガーメニュー展開時背景を固定、リサイズ対応
  // ------------------------------------
  $(function () {
    var state = false;
    var pos;

    // ハンバーガークリックで開閉
    $(".hamburger").click(function () {
      if (state == false) {
        pos = $(window).scrollTop();
        $("body").addClass("fixed").css({
          top: -pos
        });
        $(".js-sp-nav").fadeIn(300); // メニュー表示
        state = true;
      } else {
        $("body").removeClass("fixed").css({
          top: 0
        });
        window.scrollTo(0, pos);
        $(".js-sp-nav").fadeOut(300); // メニュー非表示
        state = false;
      }
    });

    // メディアクエリ判定（例：768px以上でPC表示）
    var mediaQuery = window.matchMedia("(min-width: 768px)");

    // リサイズ時にメニューを閉じ、固定解除
    $(window).on("resize", function () {
      if (mediaQuery.matches && state) {
        // メニューを閉じる
        $(".js-header").removeClass("is-active");
        $(".hamburger").removeClass("is-active");
        $(".js-sp-nav").stop(true, true).hide();

        // bodyの固定解除
        $("body").removeClass("fixed").css({
          top: 0
        });
        window.scrollTo(0, pos); // 元のスクロール位置に戻す

        state = false; // 状態リセット
      }
    });
  });

  // ------------------------------------
  // mv Swiper
  // ------------------------------------
  var swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    speed: 1500,
    //スライドの速度
    effect: "fade",
    autoplay: {
      // 自動再生
      delay: 7000 // 5秒後に次のスライド
    }
  });
  // ------------------------------------
  // campaign Swiper
  // ------------------------------------
  var swiper2 = new Swiper(".js-campaign-swiper", {
    loop: true,
    loopAdditionalSlides: 4,
    spaceBetween: 24,
    width: 280,
    breakpoints: {
      768: {
        spaceBetween: 40,
        width: 333
      }
    },
    speed: 1000,
    // 少しゆっくり(デフォルトは300)
    autoplay: {
      // 自動再生
      delay: 3000 // 3秒後に次のスライド
    },

    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // ------------------------------------
  // info 画像アニメーション
  // ------------------------------------
  //要素の取得とスピードの設定
  var box = $(".info__image"),
    speed = 700;

  //.js-image-colorの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="js-image-color"></div>');
    var color = $(this).find($(".js-image-color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // ------------------------------------
  // voice 画像アニメーション
  // ------------------------------------
  //要素の取得とスピードの設定
  var box = $(".voice-card__image"),
    speed = 700;

  //.js-image-color の付いた全ての要素に対して下記の処理を行う(img)
  box.each(function () {
    $(this).append('<div class="js-image-color"></div>');
    var color = $(this).find($(".js-image-color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // ------------------------------------
  // price 画像アニメーション
  // ------------------------------------
  //要素の取得とスピードの設定
  var box = $(".price__image"),
    speed = 700;

  //.js-image-colorの付いた全ての要素に対して下記の処理を行う(picture)
  box.each(function () {
    $(this).append('<div class="js-image-color"></div>');
    var color = $(this).find($(".js-image-color")),
      image = $(this).find("picture");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });
  // ------------------------------------
  // 下層ページ information 画像アニメーション
  // ------------------------------------
  //要素の取得とスピードの設定
  var box = $(".tab-content__right"),
    speed = 700;

  //.js-image-colorの付いた全ての要素に対して下記の処理を行う(picture)
  box.each(function () {
    $(this).append('<div class="js-image-color"></div>');
    var color = $(this).find($(".js-image-color")),
      image = $(this).find("picture");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // ------------------------------------
  // ページトップに戻るボタン
  // ------------------------------------
  $(document).ready(function () {
    var pageTop = $(".to-top");
    pageTop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
    pageTop.click(function () {
      $("body,html").animate({
        scrollTop: 0
      }, 10);
      return false;
    });
    $(window).on("scroll", function () {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();
      var footHeight = $("footer").innerHeight();
      var offset = $(window).width() < 768 ? 15 : 20; // スマートフォン表示時は15px、それ以外は20px

      if (scrollHeight - scrollPosition <= footHeight) {
        // 下側から（フッターの高さ + offset）に配置
        $(".to-top").css({
          position: "absolute",
          bottom: footHeight + offset
        });
      } else {
        // 下側からoffsetの位置に配置
        $(".to-top").css({
          position: "fixed",
          bottom: offset + "px"
        });
      }
    });
  });

  // ------------------------------------
  // モーダルウインドウ
  // ------------------------------------
  $(".js-modal-open img").on("click", function () {
    //クリックしたら
    $(".js-modal-overlay").html($(this).prop("outerHTML"));
    $(".js-modal-overlay").fadeIn(200);
    //fadeInで表示する。
    $('body').css('overflow-y', 'hidden'); // 本文の縦スクロールを無効
    return false;
  });
  $(".js-modal-overlay").on("click", function () {
    //そして、fadeInで表示する。
    $(".js-modal-overlay").fadeOut(200);
    $('body').css('overflow-y', 'auto'); // 本文の縦スクロールを無効
    return false;
  });

  // ------------------------------------
  // タブメニュー
  // ------------------------------------

  function getParam(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }
  var tabPram = ['tab-1', 'tab-2', 'tab-3'];
  var pram = getParam('active-tab');
  if (pram && $.inArray(pram, tabPram) !== -1) {
    $('.js-tab-item,.js-tab-content').removeClass('is-active');
    $('[data-tab="' + pram + '"]').addClass('is-active');
  }
  $('.js-tab-item').on('click', function () {
    var dataPram = $(this).data('tab');
    $('.js-tab-item,.js-tab-content').removeClass('is-active');
    $('[data-tab="' + dataPram + '"]').addClass('is-active');
  });

  // ------------------------------------
  // サイドバーのアーカイブアコーディオン
  // ------------------------------------
  $(".js-accordion-archive").on("click", function () {
    $(this).next(".archive__month-wrap").slideToggle(300); //中身を表示
    $(this).toggleClass("is-open", 300); // 矢印のアニメーション
  });

  // ------------------------------------
  // FAQ
  // ------------------------------------
  $(".faq-box__q").on('click', function () {
    $(this).next().slideToggle();
    $(this).children('.faq-box__icon').toggleClass('is-close');
  });
});