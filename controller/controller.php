<?php



use ETIROU\Cnx\Connexion;

require_once('../utils/database.php');

$conix = new Connexion($userAndDatabaseInformations);


/**
 * Authentification
 * 
 */
if (isset($_POST['pseudo']) && !empty($_POST['password'])) {

    $pseudo = strtolower($_POST['pseudo']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conix->registerUser($pseudo, $password);

    header('Location: ../index.php');
}



$answersCheck = $conix->answerCheckRequest();
$questions = $conix->questionRequest();
$answers = $conix->answerRequest();



/**
 * Verify answers
 */
if (isset($_POST) && !empty($_POST)) {

    session_start();

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
