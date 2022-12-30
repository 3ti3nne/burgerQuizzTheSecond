/**
 * Dark mode
 */

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
  nightBtn.innerHTML = "Light";
  if (document.querySelector(".table")) {
    document.querySelector(".table").classList.add("table-dark");
  }
  document.cookie = "darkMode=true; SameSite=None; Secure";
}

function light() {
  gameBtn.style.color = "black";
  document.body.style.color = "black";
  document.body.classList.remove("bg-dark");
  mainBG.classList.remove("bg-dark");
  footerBG.classList.remove("bg-dark");
  nightBtn.innerHTML = "Night";
  if (document.querySelector(".table")) {
    document.querySelector(".table").classList.remove("table-dark");
  }
  document.cookie = "darkMode=false; SameSite=None; Secure";
}

if (document.cookie.split(";").some((item) => item.includes("darkMode=true"))) {
  dark();
} else {
  light();
}

nightBtn.addEventListener("click", () => {
  if (!footerBG.classList.contains("bg-dark")) {
    dark();
  } else {
    light();
  }
});
