const hamburger_btn = document.querySelector("header");
const spans = document.querySelectorAll(".hamburger_btn > span");

hamburger_btn.addEventListener("click", (e) => {
  hamburger_btn.classList.toggle("menuopen");
  for (let span of spans) {
    span.classList.toggle("addspan");
  }
});
