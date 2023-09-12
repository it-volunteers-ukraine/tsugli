function handleWpcf7Invalid(event) {
  event.preventDefault();

  const errorMessage = event.detail.apiResponse.message;

  Toastify({
    text: `🐎 ${errorMessage}`,
    duration: 5000,
    gravity: "bottom",
    position: "center",
    style: {
      width: "300px",
      background: "#f1eee8",
      border: "2px solid #4f4840",
      color: "#4f4840",
      fontSize: "16px",
      fontFamily: "'Fira Sans', sans-serif",
      borderRadius: "8px",
    },
  }).showToast();
}

document.addEventListener("wpcf7invalid", handleWpcf7Invalid, false);
document.addEventListener("wpcf7mailfailed", handleWpcf7Invalid, false);

// Pop-up

const popUp = document.querySelector(".pop-up");
const closeBtn = document.querySelector(".pop-up__button");

document.addEventListener(
  "wpcf7mailsent",
  () => {
    popUp.style.display = "block";
  },
  false
);

closeBtn.addEventListener("click", () => {
  popUp.style.display = "none";
});
