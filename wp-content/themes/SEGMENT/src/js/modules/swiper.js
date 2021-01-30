import Swiper, { Navigation, Pagination, Autoplay, EffectCoverflow, EffectCube } from 'swiper'


Swiper.use([Navigation, Pagination, Autoplay, EffectCoverflow, EffectCube]);

export const clientsSwiper = new Swiper('.swiper-client-container', {
  spaceBetween: 20,
  updateOnImagesReady: true,
  pagination: {
    el: '.swiper-client-pagination',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      slidesPerGroup: 2
    }, 
    1440: {
      slidesPerView: 4,
      slidesPerGroup: 4,
    }
  },
  loop: true,
  autoplay: {
    delay: 4000,
  },
  on: {
    touchStart: function() {
      clientsSwiper.autoplay.stop()
    },
    touchEnd: function() {
      introSwiper.autoplay.start()
    },
  },
  navigation: {
    nextEl: '.swiper-client-button-next',
    prevEl: '.swiper-client-button-prev',
  },
})

export const introSwiper = new Swiper('.swiper-intro-container', {
  spaceBetween: 20,
  updateOnImagesReady: true,
  pagination: {
    el: '.swiper-intro-pagination',
  },
  loop: true,
  autoplay: {
    delay: 4000,
  },
  on: {
    touchStart: function() {
      introSwiper.autoplay.stop()
    },
    touchEnd: function() {
      introSwiper.autoplay.start()
    },
  },
  navigation: {
    nextEl: '.swiper-intro-button-next',
    prevEl: '.swiper-intro-button-prev',
  },
})

export const commonSwiper = new Swiper('.common-swiper-container', {
  speed: 400,
  spaceBetween: 30,
 effect: 'coverflow',
  autoplay: true,
 breakpoints: {
   767: {
     grabCursor: true,
     centeredSlides: true,
     // slidesPerView: 'auto',
     slidesPerView: '3',
     spaceBetween: 0,
     loop: false,
     coverflowEffect: {
       rotate: 50,
       stretch: 20,
       depth: 100,
       modifier: 1,
       slideShadows : true,
     },
     pagination: {
       el: '.swiper-pagination',
     },
     navigation: {
       nextEl: '.common-slider__controller--right',
       prevEl: '.common-slider__controller--left',
     },
   }
 }
});

if (document.querySelector('.common-swiper-container')) {
  commonSwiper.slideTo(1, false,false);
}
