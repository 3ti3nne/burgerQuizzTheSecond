/**
 * Dark mode
 */

let darkMode = false;

const nightBtn = document.querySelector("#night");
const mainBG = document.querySelector(".indexBG");
const footerBG = document.querySelector("#footerBG");
const gameBtn = document.querySelector(".list-group-item.btn");

function dark() {
  document.body.classList.add("bg-dark");
  document.body.style.color = "#ffc107";
  mainBG.classList.add("bg-dark");
  footerBG.classList.add("bg-dark");
  gameBtn.style.color = "#ffc107";

  darkMode = true;
}

function light() {
  gameBtn.style.color = "black";
  document.body.style.color = "black";
  document.body.classList.remove("bg-dark");
  mainBG.classList.remove("bg-dark");
  footerBG.classList.remove("bg-dark");

  darkMode = false;
}

nightBtn.addEventListener("click", () => {
  if (!footerBG.classList.contains("bg-dark")) {
    dark();
  } else {
    light();
  }
});
