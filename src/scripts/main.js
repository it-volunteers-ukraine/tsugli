const galleryHome = document.querySelector(".lightBox");

if (galleryHome) {
  galleryHome.addEventListener("click", onImageHomeClick);
}

function onImageHomeClick(event) {
  event.preventDefault();

  if (event.target.nodeName !== "IMG") {
    return;
  } else {
    onOpenModalHomeWindow(event);
  }
}

function onOpenModalHomeWindow(event) {
  const instance = basicLightbox.create(
    `
    <img
    src="${event.target.dataset.source}"
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
