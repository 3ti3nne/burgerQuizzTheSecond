/* const card = document.querySelector(".card");

function flipCard() {
  card.classList.toggle("flipCard");
}

card.addEventListener("click", flipCard);
 */

let quizzCardAnswer = document.querySelectorAll("li");

console.log(quizzCardAnswer);

for (let i = 0; i < quizzCardAnswer.length; i++) {
  quizzCardAnswer[i].addEventListener("click", function () {
    quizzCardAnswer[i].closest("#parent").classList.add("d-none");
  });
}

fetch("../utils/database.php")
  .then(response)
  .then((data) => console.log(data));
