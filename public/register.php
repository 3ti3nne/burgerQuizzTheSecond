<?php


require_once(__DIR__ . '../config/app.php');
require_once(__DIR__ . '../utils/database.php');
require_once(__DIR__ . '../controller/controller.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" type='text/css' integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Burger Quizz</title>
</head>

<body>

    <?php require_once(__DIR__ . '../views/header.php') ?>


    <div class="containerRegister">
        <div class="card my-5 p-5 m-auto bg-gradient w-75 text-center" style="width: 20rem;">
            <form action="controller/controller.php" method="POST">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" aria-describedby="pseudoHelp" placeholder="Choisir un pseudo" name="pseudo" required>
                    <small id="pseudoHelp" class="form-text text-muted">Trouvez un pseudo original!</small>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password" required>
                </div>
                <div class="form-group">
                    <label for="passwordCheck">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="passwordCheck" placeholder="Confirmer votre mot de passe">
                </div>
                <button type="submit" class="btn btn-warning mt-5">S'inscrire</button>
            </form>

        </div>
    </div>
    <?php require_once(__DIR__ . '/views/footer.php') ?>
</body>

</html>