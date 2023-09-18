const swiperGallery = new Swiper(".swiper-gallery", {
  slidesPerView: 1.2,
  spaceBetween: 16,
});

// LightBox
const galleryContainer = document.querySelector(".gallery__container");
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
