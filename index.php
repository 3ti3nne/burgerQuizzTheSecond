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


    <main>
        <div class="container m-auto my-5">
            <div class="card-body m-auto">
                <div class="card m-auto p-3" id="indexBG">
                    <a href=" ./game.php" style="text-decoration: none ; color: black;" class="m-auto">
                        <img id="burgerImg" src="./public/imgs/burgerLogo.png" style="object-fit:cover ; border-radius : 10px;">
                        <li class="list-group-item btn"> Commencer le jeu !
                        </li>
                    </a>

                </div>
            </div>
        </div>


        <footer style="width:100%; bottom:0; position:relative; height:2.5rem;">
            <?php require('./views/footer.php') ?>
        </footer>



        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
</body>

</html>