<?php
session_start();
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
    <title>ScoreBoard</title>
</head>

<body>

    <!-- RAJOUTER UNE MODALE AVEC LES SCORES ENREGISTRES
 -->
    <?php require('./views/header.php') ?>



    <div class="row">

        <div class="column-2 mb-r">
            <div class="card bg-dark bg-gradient text-white text-center p-1" id="scoreCard" style="margin:50px;">
                <div class="card-body m-auto">
                    <h1 class="card-title">BRAVO <?php if (!empty($_SESSION['pseudo'])) {
                                                        echo $_SESSION['pseudo'];
                                                    } else {
                                                        header('Location: /index.php');
                                                    } ?></h1>
                    <p class="card-text">Tu as réussi à scorer un magnifique <?= (int)($countPoints / 6 * 100) ?> % de bonnes réponses !!!</p>
                    <?php
                    if ($countPoints == 0) { ?>
                        <p class="alert alert-danger"><strong>C'est quand même pas terrible hein.</strong></p>

                    <?php
                    } elseif ($countPoints == 6) { ?>
                        <p class="alert alert-success"><strong>FANTASTIQUE !! C'est un sans fautes!</strong></p>
                    <?php
                    }
                    ?>
                    <img src="./public/imgs/chabatBG.jpg" class="mx-2" id="chabat" alt="chabat" style="height: 500px ; border-radius: 10px;">
                </div>
                <a href="./game.php" class="btn btn-outline-warning p-3 my-3 m-auto" id="reloadBtn">Rejouer ?</a>
            </div>
        </div>
    </div>



    <footer style="width:100%; bottom:0; position:relative; height:2.5rem;">
        <?php
        require('./views/footer.php')
        ?>
    </footer>

    <script src="/public/js/scriptDark.js"></script>

</body>

</html>