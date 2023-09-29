function handleWpcf7Invalid(event) {
  event.preventDefault();

  const errorMessage = event.detail.apiResponse.message;

  Toastify({
    text: `🐎 ${errorMessage}`,
    duration: 5000,
    gravity: "bottom",
    position: "center",
    style: {
      background: "#f1eee8",
      border: "2px solid #4f4840",
      color: "#4f4840",
      fontSize: "18px",
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
const popUpText = document.querySelector(".pop-up__text");

document.addEventListener(
  "wpcf7mailsent",
  (e) => {
    const formId = e.detail.contactFormId;
    if (formId === 141) {
      popUpText.textContent = "Ви успішно підписалися на розсилку.";
    } else {
      popUpText.textContent = "Ми обов'язково зв'яжемося з вами.";
    }

    popUp.style.display = "block";
  },
  false
);

closeBtn.addEventListener("click", () => {
  popUp.style.display = "none";
});
