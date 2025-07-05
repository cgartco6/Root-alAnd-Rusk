document.getElementById("languageSwitcher").addEventListener("change", function () {
  const lang = this.value;
  fetch(`lang/${lang}.json`)
    .then((res) => res.json())
    .then((data) => {
      document.querySelectorAll("[data-lang]").forEach((el) => {
        const key = el.getAttribute("data-lang");
        if (data[key]) el.textContent = data[key];
      });
    });
});
