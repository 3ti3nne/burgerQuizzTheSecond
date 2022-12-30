<?php



use ETIROU\Cnx\Connexion;


require_once(__DIR__ . '/../utils/database.php');

$conix = new Connexion($userAndDatabaseInformations);


/**
 * Registration
 * 
 */
if (isset($_POST['pseudo']) && !empty($_POST['password'])) {

    $pseudo = strtolower($_POST['pseudo']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conix->registerUser($pseudo, $password);

    header('Location: ../index.php');
}

/**
 * Authentification
 */
if (isset($_POST['loginPseudo']) && !empty($_POST['loginPassword'])) {


    $pseudo = strtolower($_POST['loginPseudo']);
    $password = $_POST['loginPassword'];

    $isLoginSuccess = $conix->login($pseudo, $password);

    if ($isLoginSuccess) {
        session_start();
        $_SESSION['pseudo'] = $pseudo;

        header('Location: ../game.php');
    } else {
        header('Location: ../index.php');
        $error = 'Identifiants incorrects';
        exit();
    }
}




$answersCheck = $conix->answerCheckRequest();
$questions = $conix->questionRequest();
$answers = $conix->answerRequest();



/**
 * Verify answers
 */
if (isset($_POST) && !empty($_POST)) {

    $userAnswers = $_POST;
    $countPoints = 0;

    foreach ($answersCheck as $answer) {
        foreach ($userAnswers as $userAnswer) {
            if ($answer['id'] == $userAnswer && $answer['answer_check'] === 1) {
                $countPoints++;
            }
        }
    }
    $conix->saveScore($countPoints, $_SESSION['pseudo']);
}
