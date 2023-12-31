const ps = document.querySelectorAll("p");
const checkboxes = document.querySelectorAll("input[type='checkbox']");

checkboxes.forEach((checkbox, index) => {
  const observer = new ResizeObserver((entries) => {
    for (let entry of entries) {
      entry.target.classList[
        entry.target.scrollHeight > entry.contentRect.height ? "add" : "remove"
      ]("truncated");
    }
  });

  observer.observe(ps[index]);
});

const swiper = new Swiper(".about-swiper", {
  slidesPerView: "auto",
  spaceBetween: 16,
});
