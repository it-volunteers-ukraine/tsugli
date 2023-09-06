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
    swiperGallery.slideTo(0);
    swiperGallery.update();
  });
});

// LightBox
const galleryContainer = document.querySelector(".galerry__container");
galleryContainer.addEventListener("click", onImageClick);

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
        galleryContainer.addEventListener("keydown", onEscPress);
      },
      onClose: (instance) => {
        galleryContainer.removeEventListener("keydown", onEscPress);
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
