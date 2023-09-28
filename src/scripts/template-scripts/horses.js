const swiperVideoGallery = new Swiper(".swiper-video", {
  slidesPerView: 1,
  spaceBetween: 10,
  allowTouchMove: false,

  breakpoints: {
    992: {
      spaceBetween: 32,
      slidesPerView: 2,
    },
    1920: {
      slidesPerView: 2,
      spaceBetween: 44,
    },
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
});

// VideoGallery LightBox

const videoGallery = document.querySelector(".videoLightBox");

videoGallery.addEventListener("click", onVideoClick);

function onVideoClick(event) {
  event.preventDefault();

  if (event.target.nodeName !== "VIDEO") {
    return;
  } else {
    onOpenModalVideoWindow(event);
  }
}

function onOpenModalVideoWindow(event) {
  const instance = basicLightbox.create(
    `
		<video controls controls >
			<source src="${event.target.dataset.source}" type="video/mp4">
		</video>
	`,
    {
      onShow: (instance) => {
        document.addEventListener("keydown", onEscPress);
      },

      onClose: (instance) => {
        document.removeEventListener("keydown", onEscPress);
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
