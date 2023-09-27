function startCountdown(seconds) {
  const countdownElement = document.getElementById("countdown");

  function updateCountdown() {
    countdownElement.textContent = seconds;
    seconds--;

    if (seconds < 0) {
      window.location.href = "/?page_id=5";
    } else {
      setTimeout(updateCountdown, 1000);
    }
  }

  updateCountdown();
}
startCountdown(10);
