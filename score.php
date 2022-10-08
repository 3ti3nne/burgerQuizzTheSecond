<?php

require_once('./controller/controller.php')

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


    <?php require('./views/header.php') ?>


    <div class="card bg-dark text-white w-50 m-auto">
        <div class="card-body">
            <h1 class="card-title">BRAVO</h1>
            <p class="card-text">Tu as réussi à faire un magnifique score de <?= $countPoints ?> de bonnes réponses !!!</p>
            <a href="./game.php" class="btn btn-warning">Rejouer ?</a>
        </div>
    </div>

    <?php
    foreach ($_SESSION['user'] as $user) {
        print_r($user);
    }
    ?>



    <footer style="position:fixed; bottom:0px; width:100%;">
        <?php
        require('./views/footer.php')
        ?>
    </footer>
</body>

</html>