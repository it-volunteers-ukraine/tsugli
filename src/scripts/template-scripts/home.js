const swiper = new Swiper(".swiper", {
  slidesPerView: 1.515,
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

// Получаем текущую ширину экрана
const screenWidth = window.innerWidth;

// Устанавливаем allowTouchMove в зависимости от ширины экрана
swiper.allowTouchMove = screenWidth <= 768;
