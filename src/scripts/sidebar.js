const buttonCategoriesToggle = document.querySelector(".categories-button");
const buttonPostsToggle = document.querySelector(".latest-posts-button");
const categoriesList = document.querySelector(".categories__list");
const categoriesPosts = document.querySelector(".latest-posts");

buttonCategoriesToggle.addEventListener("click", function (e) {
  handleToggleList(e, categoriesList);
});

buttonPostsToggle.addEventListener("click", function (e) {
  handleToggleList(e, categoriesPosts);
});

function handleToggleList(e, list) {
  button = e.currentTarget;
  button.classList.toggle("is-open");
  list.classList.toggle("is-open");
}
