function startCountdown(seconds) {
  const countdownElement = document.getElementById("countdown");

  function updateCountdown() {
    countdownElement.textContent = seconds;
    seconds--;

    if (seconds < 0) {
      // Якщо відлік завершився, робимо редірект
      window.location.href = "/?page_id=9"; // Замініть це на фактичний URL-адресу вашої сторінки
    } else {
      setTimeout(updateCountdown, 1000);
    }
  }

  updateCountdown();
}

// Почати відлік з 10 секунд
startCountdown(10);
