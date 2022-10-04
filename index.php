<?php

use ETIROU\Cnx\Connexion;

require('./utils/database.php');
require('./config/app.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" type='text/css' integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Burger Quizz</title>
</head>

<body>
    <?php
    require('./views/header.php')
    ?>
    <!-- <div class="maincontainer">   ca c'est pour les cards on verra plus tard
        <div class="card" id="card">
            <div class="front">
                <h1>Front</h1>
            </div>
            <div class="back">
                <h1>Back</h1>
            </div>
        </div>
    </div> -->

    <?php
    $conix = new Connexion($conf);
    $questions = $conix->requeteQuestion();
    /* echo "<pre>";
    print_r($questions);
    echo "</pre>"; */

    $answers = $conix->requeteAnswer();
    /* echo "<pre>";
    print_r($answers);
    echo "</pre>"; */

    $letters = ["A", "B", "C", "D", "E"];
    $i = 0;

    foreach ($questions as $question) {

    ?>
        <div class="container m-4 h-100">
            <div class="card m-auto" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $question['question'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">La réponse : </h6>
                    <ol class="list-group">
                        <?php foreach ($answers as $answer) {
                            if ($answer['question_id'] === $question['id']) {

                        ?>
                                <li class="list-group-item btn btn-dark"><?= "<strong>" . $letters[$i] . "</strong>" . " : " . $answer['answer'] ?></li>

                        <?php
                                $i++;
                            };
                        }
                        $i = 0;

                        ?>
                    </ol>
                    <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
        </div>
    <?php }
    ?>




    <?php
    require('./views/footer.php')
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./public/js/script.js"></script>
</body>

</html>