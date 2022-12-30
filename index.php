<?php
session_start();
require_once(__DIR__ . '/controller/controller.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" type='text/css' integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Burger Quizz</title>
</head>

<body>


    <?php
    require('./views/header.php')
    ?>


    <main>

        <div class="card-body m-auto">
            <div class="indexBG card m-auto p-3" id="indexBG">
                <a type="button" style="text-decoration: none ; color: black; cursor:pointer;" class="m-auto" <?php if (!empty($_SESSION['pseudo'])) {
                                                                                                                ?> href="game.php" <?php
                                                                                                                                } else {
                                                                                                                                    ?> data-toggle="modal" data-target="#modal" <?php } ?>>
                    <img id="burgerImg" src="./public/imgs/burgerLogo.png" style="object-fit:cover ; border-radius : 10px;">
                    <li class="list-group-item btn"> Commencer le jeu !
                    </li>
                </a>

            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Connexion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="./controller/controller.php" method="POST">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="pseudo">Pseudo</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="pseudo" name="loginPseudo">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="password">Mot de passe</span>
                                </div>
                                <input type="password" class="form-control" aria-label="Default" aria-describedby="password" name="loginPassword">
                            </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <a type="button" class="btn btn-outline-warning flex-start" href="register.php">Inscription</a>
                        <button type="submit" class="btn btn-outline-primary">Connexion</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <footer style="width:100%; bottom:0; position:relative; height:2.5rem;">
            <?php require('./views/footer.php') ?>
        </footer>


        <script src="/public/js/scriptDark.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>