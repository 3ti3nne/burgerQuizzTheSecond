//Bonjour

let countPoints = 0;
let compteurPage = 0;

/* function Answers() {
  let answers = jsonAnswers;
  this.getArr = function () {
    return answers;
  };
}

function Questions() {
  let questions = jsonQuestions;
  this.getArr = function () {
    return questions;
  };
}
let answers = new Answers();
let nanswer = answers.getArr();
console.log(nanswer); */

let quizzCardAnswers = document.querySelectorAll("li");

//    Displays the first question div.

document.querySelector("#parent" + compteurPage).classList.remove("d-none");

//    Add listener on responses('li') and check if they're right.

quizzCardAnswers.forEach((quizzCardAnswer) =>
  quizzCardAnswer.addEventListener("click", function () {
    //    Gets the id of the answer clicked.

    let answerID = this.id;
    jsonAnswers.forEach((jsonAnswer) => {
      //    Compare it, if true add point.

      if (jsonAnswer.id == answerID && jsonAnswer.answer_check == 1) {
        countPoints++;
      }
    });

    //    Hide current question card div, display the next.
    document.querySelector("#parent" + compteurPage).classList.add("d-none");
    compteurPage++;
    document.querySelector("#parent" + compteurPage).classList.remove("d-none");
  })
);
