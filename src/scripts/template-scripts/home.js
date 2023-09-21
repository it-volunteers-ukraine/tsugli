jQuery(document).ready(function ($) {
  var imagesPerPage = 12; // Кількість зображень на сторінці
  var $galleryContainer = $(".gallery-home__container");
  var $paginationLinks = $(".gallery-pagination a");

  // Приховуємо всі зображення
  $galleryContainer.find(".gallery__item").hide();

  // Показуємо перші 8 зображень
  $galleryContainer.find(".gallery__item:lt(" + imagesPerPage + ")").show();

  // Додаємо клас is-active до першої кнопки пагінації при завантаженні сторінки
  $paginationLinks.first().addClass("is-active");

  // Перевірка кількості зображень
  var totalImages = $galleryContainer.find(".gallery__item").length;

  if (totalImages <= imagesPerPage) {
    $(".gallery-pagination").hide(); // Ховаємо пагінацію, якщо кількість зображень менша або дорівнює imagesPerPage
  }

  // Filter
  function filterImagesByCategory(category) {
    // Приховуємо всі зображення
    $galleryContainer.find(".gallery__item").hide();

    if (category === "all") {
      // Показуємо всі зображення, якщо вибрана категорія "Всі"
      $galleryContainer.find(".gallery__item:lt(" + imagesPerPage + ")").show();

      // Показуємо пагінацію при активній категорії "Всі"
      $(".gallery-pagination").show();

      // Перевірка кількості зображень
      totalImages = $galleryContainer.find(".gallery__item").length;

      if (totalImages <= imagesPerPage) {
        $(".gallery-pagination").hide(); // Ховаємо пагінацію, якщо кількість зображень менша або дорівнює imagesPerPage
      }
    } else {
      // Приховуємо пагінацію при інших категоріях
      $(".gallery-pagination").hide();

      // Показуємо зображення, що відповідають вибраній категорії
      $galleryContainer
        .find(
          ".gallery__item[data-category='" +
            category +
            "']:lt(" +
            imagesPerPage +
            ")"
        )
        .show();
    }
  }

  // Вішаємо обробник кліків на кнопки категорій
  $(".gallery__buttons").on("click", ".gallery__button", function () {
    var category = $(this).data("category");

    // Видаляємо клас is-active з усіх кнопок категорій
    $(".gallery__buttons .gallery__button").removeClass("active");

    // Додаємо клас is-active до обраної кнопки категорії
    $(this).addClass("active");

    // Викликаємо функцію фільтрації для відображення зображень відповідно до категорії
    filterImagesByCategory(category);
  });

  // Викликаємо функцію фільтрації для відображення всіх зображень при завантаженні сторінки
  filterImagesByCategory("all");

  // Вішаємо обробник кліків на пагінаційні посилання
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
});


// Swiper
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

// LightBox
const galleryContainer = document.querySelector(".gallery-home__container");
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
