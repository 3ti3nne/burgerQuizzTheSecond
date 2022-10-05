/* const card = document.querySelector(".card");

function flipCard() {
  card.classList.toggle("flipCard");
}

card.addEventListener("click", flipCard);
 */

let compteurPoints = 0;
let compteurPage = 0;
let quizzCardAnswers = document.querySelectorAll("li");
document.querySelector("#parent" + compteurPage).classList.remove("d-none");

quizzCardAnswers.forEach((quizzCard) =>
  quizzCard.addEventListener("click", function () {
    let answerID = this.id;
    jsonAnswers.forEach((jsonAnswer) => {
      if (jsonAnswer.id == answerID && jsonAnswer.answer_check == 1) {
        compteurPoints++;
        console.log("kikounette");
      }
    });
    document.querySelector("#parent" + compteurPage).classList.add("d-none");
    compteurPage++;
    document.querySelector("#parent" + compteurPage).classList.remove("d-none");

    console.log(compteurPoints);
  })
);
/* quizzCardAnswer[i].addEventListener("click", function () {
        quizzCardAnswer[i].closest("#parent").classList.add("d-none");
      for (let j = 0; j < jsonAnswers.length; j++) {
      if (
        quizzCardAnswer[i].innerHTML.includes(jsonAnswers[j].id) &&
        jsonAnswers[j].answer_check === 1
      ) {
        console.log(jsonAnswers[i]);
      }
    } */
/*     if(quizzCardAnswer[i].innerHTML.)
 */

/* console.log(jsonQuestions);
console.log(jsonAnswers);
for (let i = 0; i < jsonQuestions.length; i++) {
  for (let j = 0; j < jsonAnswers.length; j++) {
    if (
      jsonQuestions[i].id === jsonAnswers[j].question_id &&
      jsonAnswers[j].answer_check === 1
    )
      console.log(jsonAnswers[j].answer);
  }
} */
/* fetch("../utils/database.php")
  .then((response) => {
    console.log(response);
    return response.json();
  })
  .then((data) => {
    console.log(data);
    return data;
  }); */
