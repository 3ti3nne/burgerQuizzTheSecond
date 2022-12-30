<nav class="navbar bg-dark bg-gradient border-dark">
    <div class="container-fluid">
        <button type="button" id="night" class="btn btn-warning">Night</button>
        <a class="navbar-brand" href="/index.php">
            <img id="img" src="../public/imgs/Burger_Quiz_logo_ecrit.png" width="300" height="100" class="d-inline-block align-text-top">
        </a>
        <?php if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) {
        ?> <a class="btn btn-outline-warning d-flex p-3 hidden-xs" id="scoreBtn" href="scoreboard.php">
                <h2>Score</h2>
            </a>

            <a class="btn btn-outline-warning d-flex p-3 hidden-xs" id="logOutBtn" href="logOut.php">
                <h2>Déconnexion</h2>
            </a>

        <?php
        } else {
        ?> <a class="btn btn-outline-warning d-flex p-3 hidden-xs" data-toggle="modal" data-target="#modal">
                <h2>Connexion</h2>
            </a>
        <?php }
        ?>
    </div>
</nav>