// Swiper
const swiper = new Swiper(".swiper", {
  slidesPerView: 1.51,
  spaceBetween: 16,
  allowTouchMove: true,

  breakpoints: {
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
const swiperHomeGallery = new Swiper(".swiper-gallery", {
  slidesPerView: 1.29,
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

// LightBox
const galleryHome = document.querySelector(".gallery-home__container");
galleryHome.addEventListener("click", onImageClick);

function onImageClick(event) {
  event.preventDefault();

  if (event.target.nodeName !== "IMG") {
    return;
  } else {
    onOpenModalWindow(event);
  }
}

function onOpenModalWindow(event) {
  const instance = basicLightbox.create(
    `
    <img
    src = "${event.target.dataset.source}"
    width="800" 
    height="600"
    >`,
    {
      onShow: (instance) => {
        galleryHome.addEventListener("keydown", onEscPress);
      },
      onClose: (instance) => {
        galleryHome.removeEventListener("keydown", onEscPress);
      },
    }
  );

  instance.show();

  function onEscPress(event) {
    if (event.code === "Escape") {
      instance.close();
    }
  }
}
