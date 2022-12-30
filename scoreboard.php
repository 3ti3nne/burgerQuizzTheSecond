<?php
session_start();
if (empty($_SESSION['pseudo'])) {
    header('Location: index.php');
    exit();
}

require_once('./controller/controller.php');
require_once('./utils/database.php');

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

        <table class="table table-striped table-dark w-75 m-auto my-5">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $scores = $conix->retrieveScores();
                $i = 1;
                foreach ($scores as $score) {
                ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $score['pseudo'] ?></td>
                        <td><?= $score['score'] ?></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>

            </tbody>
        </table>
    </main>



    <footer style="width:100%; bottom:0; position:relative; height:2.5rem;">
        <?php require('./views/footer.php') ?>
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>