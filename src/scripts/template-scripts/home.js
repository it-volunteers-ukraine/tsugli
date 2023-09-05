const swiper = new Swiper(".swiper", {
  slidesPerView: 1.51,
  spaceBetween: 16,
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
    992: {
      spaceBetween: 44,
    },
  },
});

const screenWidth = window.innerWidth;
swiper.allowTouchMove = screenWidth <= 768;

const swiperGallery = new Swiper(".swiper-gallery", {
  slidesPerView: 1.3,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
});
