const buttonTop = document.querySelector("#buttonTop");

buttonTop.addEventListener("click", scrollToTop);

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
