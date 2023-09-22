jQuery(document).ready(function ($) {
  var imagesPerPage = 8; // Кількість зображень на сторінці
  var $galleryContainer = $(".gallery__container");
  var $paginationLinks = $(".gallery-pagination a");

  // Приховуємо всі зображення
  $galleryContainer.find(".gallery__item").hide();

  // Показуємо перші 8 зображень
  $galleryContainer.find(".gallery__item:lt(" + imagesPerPage + ")").show();

  // Додаємо клас is-active до першої кнопки пагінації при завантаженні сторінки
  $paginationLinks.first().addClass("is-active");

  // Обробка кліків по посиланнях пагінації
  $paginationLinks.on("click", function (e) {
    e.preventDefault();
    var page = $(this).data("page");
    var startIndex = (page - 1) * imagesPerPage;
    var endIndex = startIndex + imagesPerPage;

    // Приховуємо всі зображення
    $galleryContainer.find(".gallery__item").hide();

    // Показуємо зображення від startIndex до endIndex
    $galleryContainer.find(".gallery__item").slice(startIndex, endIndex).show();

    // Видаляємо клас is-active з усіх кнопок пагінації
    $paginationLinks.removeClass("is-active");

    // Додаємо клас is-open до активної кнопки пагінації
    $(this).addClass("is-active");
  });

  // Перевірка кількості зображень
  var totalImages = $galleryContainer.find(".gallery__item").length;

  if (totalImages <= imagesPerPage) {
    $(".gallery-pagination").hide(); // Ховаємо пагінацію, якщо кількість зображень менша або дорівнює imagesPerPage
  }
});

// Swiper
const swiperGallery = new Swiper(".swiper-gallery", {
  slidesPerView: 1.2,
  spaceBetween: 16,
});

// // LightBox
// const galleryContainer = document.querySelector(".gallery__container");
// galleryContainer.addEventListener("click", onImageClick);

// function onImageClick(event) {
//   event.preventDefault();

//   if (event.target.nodeName !== "IMG") {
//     return;
//   } else {
//     onOpenModalWindow(event);
//   }
// }

// function onOpenModalWindow(event) {
//   const instance = basicLightbox.create(
//     `
//     <img
//     src = "${event.target.dataset.source}"
//     width="800" 
//     height="600"
//     >`,
//     {
//       onShow: (instance) => {
//         galleryContainer.addEventListener("keydown", onEscPress);
//       },
//       onClose: (instance) => {
//         galleryContainer.removeEventListener("keydown", onEscPress);
//       },
//     }
//   );

//   instance.show();

//   function onEscPress(event) {
//     if (event.code === "Escape") {
//       instance.close();
//     }
//   }
// }
