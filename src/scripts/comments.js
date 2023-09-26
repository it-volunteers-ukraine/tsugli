const buttonToggle = document.querySelector(".comments-button");
const commentsList = document.querySelector(".comment__list");

if (buttonToggle) buttonToggle.addEventListener("click", handleToggleComments);

function handleToggleComments() {
  buttonToggle.classList.toggle("is-open");
  commentsList.classList.toggle("is-open");
}
