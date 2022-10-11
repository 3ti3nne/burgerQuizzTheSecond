<?php

use ETIROU\Cnx\Connexion;

require_once('./utils/database.php');

///////////////////////////////////////////////////////////////////////////////.


$conix = new Connexion($conf);
$answersCheck = $conix->answerCheckRequest();
$questions = $conix->questionRequest();
$answers = $conix->answerRequest();




if (isset($_POST) && !empty($_POST)) {

    session_start();

    $_SESSION['user']['pseudo'] = $_POST['pseudo'];


    $userAnswers = $_POST;


    $countPoints = 0;

    foreach ($answersCheck as $answer) {
        foreach ($userAnswers as $userAnswer) {
            if ($answer['id'] == $userAnswer && $answer['answer_check'] === 1) {
                $countPoints++;
            }
        }
    }
}
