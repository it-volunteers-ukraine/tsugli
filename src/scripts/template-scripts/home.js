// Swiper
const swiper = new Swiper(".swiperActivities", {
  slidesPerView: 1.51,
  spaceBetween: 16,
  allowTouchMove: true,

  breakpoints: {
    500:{
      slidesPerView: 2.2,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 32,
      allowTouchMove: false,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 44,
      allowTouchMove: false,
    },
  },
});

const swiperHomeGallery = new Swiper(".swiperHomeGallery", {
  slidesPerView: "auto",
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
});

// Галерея
const galleryButtons = document.querySelectorAll(".gallery__button");
const galleryItems = document.querySelectorAll(".gallery__item");

galleryButtons.forEach(function (button) {
  button.addEventListener("click", function () {
    const category = button.getAttribute("data-category");

    galleryButtons.forEach(function (btn) {
      btn.classList.remove("active");
    });
    button.classList.add("active");

    galleryItems.forEach(function (item) {
      const itemCategories = item.getAttribute("data-category");

      if (category === "all" || itemCategories.includes(category)) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
    swiperHomeGallery.slideTo(0);
    swiperHomeGallery.update();
  });
});

