jQuery(document).ready((function(e){var n=e(".gallery__container"),a=e(".gallery-pagination a");n.find(".gallery__item").hide(),n.find(".gallery__item:lt(8)").show(),a.first().addClass("is-active"),a.on("click",(function(i){i.preventDefault();var t=8*(e(this).data("page")-1),l=t+8;n.find(".gallery__item").hide(),n.find(".gallery__item").slice(t,l).show(),a.removeClass("is-active"),e(this).addClass("is-active")})),n.find(".gallery__item").length<=8&&e(".gallery-pagination").hide()}));const swiperGallery=new Swiper(".swiper-gallery",{slidesPerView:1.2,spaceBetween:16}),galleryContainer=document.querySelector(".gallery__container");function onImageClick(e){e.preventDefault(),"IMG"===e.target.nodeName&&onOpenModalWindow(e)}function onOpenModalWindow(e){const n=basicLightbox.create(`\n    <img\n    src = "${e.target.dataset.source}"\n    width="800" \n    height="600"\n    >`,{onShow:e=>{galleryContainer.addEventListener("keydown",a)},onClose:e=>{galleryContainer.removeEventListener("keydown",a)}});function a(e){"Escape"===e.code&&n.close()}n.show()}galleryContainer.addEventListener("click",onImageClick);