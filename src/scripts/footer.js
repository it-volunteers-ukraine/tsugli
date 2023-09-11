function handleWpcf7Invalid(event) {
  event.preventDefault();

  const errorMessage = event.detail.apiResponse.message;

  Toastify({
    text: errorMessage,
    duration: 5000,
    gravity: "bottom",
    position: "center",
    style: {
      background: "#4f4840",
      color: "#f1eee8",
      fontSize: "16px",
      borderRadius: "8px",
    },
  }).showToast();
}

document.addEventListener("wpcf7invalid", handleWpcf7Invalid, false);
document.addEventListener("wpcf7mailfailed", handleWpcf7Invalid, false);
// document.addEventListener("wpcf7mailsent", handleWpcf7Invalid, false);
