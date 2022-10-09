<?php


require_once('./config/app.php');
require_once('./utils/database.php');
require_once('./controller/controller.php');

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

    <?php require('./views/header.php') ?>

    <main>

        <?php

        //      Initializations for questions display and logic, $letters for letter display before each answer.
        $letters = ["A", "B", "C", "D", "E"];
        $indexQuestion = 0;
        $i = 0;

        ?>
        <div class="container">

            <form action="./score.php" method="post">

                <?php
                foreach ($questions as $question) {
                ?>

                    <!--            Display of questions and their associate answers from PHP SQL requests.        
                                Id for display and hide.
 -->
                    <div class="card mt-5 m-auto text-bg-dark d-none w-50" id="parent<?= $indexQuestion ?>" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $question['question'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted" style="color: #ffc107 !important;">La réponse : </h6>
                            <p class="d-none"><?= $question['id'] ?></p>
                            <ol class="list-group">
                                <?php foreach ($answers as $answer) {
                                    if ($answer['question_id'] === $question['id']) {

                                ?>
                                        <div class="form-group">
                                            <label class="list-group-item btn btn-dark m-1" for="btn<?= $answer['id'] ?>"><?= "<strong>" . $letters[$i] . "</strong>" . " : " . $answer['answer'] ?></label>
                                            <input class="d-none" type="radio" id="btn<?= $answer['id'] ?>" value="<?= $answer['id'] ?>" name="<?= $answer['id'] ?>">
                                        </div>
                                <?php
                                        $i++;
                                    };
                                }
                                $i = 0;

                                ?>
                            </ol>
                        </div>
                    </div>


                <?php
                    //      Adding for display's identification in JS.
                    $indexQuestion++;
                }
                ?>

                <div class="alert alert-warning alert-dismissible d-none m-auto mt-5" id="parent<?= $indexQuestion ?>" role="alert">
                    <strong>Enregistre ton pseudo !</strong> :
                    <input type="text" name="pseudo">
                    <button type="submit" class="btn btn-dark" data-dismiss="alert">Envoyer
                    </button>
                </div>
                <!-- <div class="card mt-5 ml-5 text-bg-dark d-none" id="parent" style="width: 20rem;">
                    <div class="card-body"><button class="btn btn-dark" type="submit">Envoyer</button></div>
                </div> -->

            </form>
        </div>
    </main>


    <footer style="position:fixed; bottom:0px; width:100%;">
        <?php
        require('./views/footer.php')
        ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./public/js/script.js"></script>
</body>

</html>