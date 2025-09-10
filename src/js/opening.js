"use strict";


// ------------------------------------
// # オープニングアニメーション
// ------------------------------------
window.addEventListener('DOMContentLoaded', function () {
  var isFirstLoad = sessionStorage.getItem('isFirstLoad');
  var opening = document.querySelector('.opening');
  var header = document.querySelector('.header');

  // PCサイズ判定（768px以上をPCとみなす）
  if (window.matchMedia('(min-width: 768px)').matches) {
    if (!isFirstLoad) {
      document.body.style.overflow = 'hidden';
      var openingTL = gsap.timeline({
        onComplete: function onComplete() {
          document.body.style.overflow = '';
          opening.style.display = 'none';
        }
      });
      openingTL.to('.opening__logo', {
        autoAlpha: 1,
        duration: .5,
        delay: .2,
        ease: 'power3.out'
      }).to('.opening__logo', {
        autoAlpha: 0,
        duration: .5,
        delay: 0.5,
        ease: 'power3.out'
      }).to('.opening__left', {
        y: '-100%',
        ease: 'power2.out',
        duration: 2,
        delay: .3
      }).to('.opening__right', {
        y: '-100%',
        ease: 'power2.out',
        duration: 2
      }, '<0.2').to('.opening__logo', {
        autoAlpha: 1,
        duration: 1,
        ease: 'power3.out'
      }, '-=.5').to('.opening__title , .opening__subtitle', {
        color: '#fff'
      }, '<').to('.opening__img-wrap', {
        autoAlpha: 0
      }, '<').fromTo('.header', {
        y: '-100%'
      }, {
        y: '0%',
        ease: 'power3.out',
        delay: .3,
        duration: 1.5
      }).to('.opening', {
        autoAlpha: 0
      }, '<');
      sessionStorage.setItem('isFirstLoad', true);
    } else {
      // 2回目以降は最初から非表示にする
      opening.style.display = 'none';
      header.style.transform = 'translateY(0%)';
    }
  } else {
    // 767px以下のときは opening を常に非表示にする
    opening.style.display = 'none';
    header.style.transform = 'translateY(0%)';
  }
});