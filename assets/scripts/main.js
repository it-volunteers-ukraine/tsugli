const buttonToggle=document.querySelector(".comments-button"),commentsList=document.querySelector(".comment__list");function handleToggleComments(){buttonToggle.classList.toggle("is-open"),commentsList.classList.toggle("is-open")}function handleWpcf7Invalid(e){e.preventDefault();const t=e.detail.apiResponse.message;Toastify({text:`🐎 ${t}`,duration:5e3,gravity:"bottom",position:"center",style:{background:"#f1eee8",border:"2px solid #4f4840",color:"#4f4840",fontSize:"18px",fontFamily:"'Fira Sans', sans-serif",borderRadius:"8px"}}).showToast()}buttonToggle.addEventListener("click",handleToggleComments),document.addEventListener("wpcf7invalid",handleWpcf7Invalid,!1),document.addEventListener("wpcf7mailfailed",handleWpcf7Invalid,!1);const popUp=document.querySelector(".pop-up"),closeBtn=document.querySelector(".pop-up__button");document.addEventListener("wpcf7mailsent",(()=>{popUp.style.display="block"}),!1),closeBtn.addEventListener("click",(()=>{popUp.style.display="none"})),(()=>{const e=document.querySelector("[data-menu-button]"),t=document.querySelector("[data-menu]");e.addEventListener("click",(()=>{const o="true"===e.getAttribute("aria-expanded")||!1;e.classList.toggle("is-open"),e.setAttribute("aria-expanded",!o),t.classList.toggle("is-open")}))})();const galleryHome=document.querySelector(".lightBox");function onImageHomeClick(e){e.preventDefault(),"IMG"===e.target.nodeName&&onOpenModalHomeWindow(e)}function onOpenModalHomeWindow(e){const t=basicLightbox.create(`\n    <img\n    src="${e.target.dataset.source}"\n    width="800" \n    height="600"\n    >`,{onShow:e=>{galleryHome.addEventListener("keydown",o)},onClose:e=>{galleryHome.removeEventListener("keydown",o)}});function o(e){"Escape"===e.code&&t.close()}t.show()}galleryHome&&galleryHome.addEventListener("click",onImageHomeClick);const articleSwiper=new Swiper(".swiper-article",{slidesPerView:"auto",spaceBetween:16,breakpoints:{992:{spaceBetween:24}}}),buttonCategoriesToggle=document.querySelector(".categories-button"),buttonPostsToggle=document.querySelector(".latest-posts-button"),categoriesList=document.querySelector(".categories__list"),categoriesPosts=document.querySelector(".latest-posts");function handleToggleList(e,t){button=e.currentTarget,button.classList.toggle("is-open"),t.classList.toggle("is-open")}buttonCategoriesToggle.addEventListener("click",(function(e){handleToggleList(e,categoriesList)})),buttonPostsToggle.addEventListener("click",(function(e){handleToggleList(e,categoriesPosts)}));