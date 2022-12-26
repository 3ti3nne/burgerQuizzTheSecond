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

    <div class="containerRegister">
        <div class="card my-5 p-5 m-auto bg-gradient w-75 text-center" style="width: 20rem;">
            <form action="./controller/controller.php" method="POST">
                <div class="input-group mb-3 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="pseudo">Choisir un pseudo</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="pseudo">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="password">Choisir un mot de passe</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="password">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="passwordConfirm">Confirmer le mot de passe</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="passwordConfirm">
                </div>

                <button type="submit" class="btn btn-warning">S'inscrire !</button>
            </form>

        </div>
    </div>
    <?php require('./views/footer.php') ?>
</body>

</html>