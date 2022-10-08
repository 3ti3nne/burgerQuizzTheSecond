//Bonjour

let compteurPage = 0;

let quizzCardAnswers = document.querySelectorAll("label");

//    Displays the first question div.

document.querySelector("#parent" + compteurPage).classList.remove("d-none");

//    Add listener on responses('li') and check if they're right.

quizzCardAnswers.forEach((quizzCardAnswer) =>
  quizzCardAnswer.addEventListener("click", function () {
    //    Gets the id of the answer clicked.

    //    Hide current question card div, display the next.
    document.querySelector("#parent" + compteurPage).classList.add("d-none");
    compteurPage++;
    document.querySelector("#parent" + compteurPage).classList.remove("d-none");
  })
);
