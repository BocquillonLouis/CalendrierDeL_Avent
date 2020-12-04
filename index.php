<?php
    require "src/html/gestionSession.php";

    $_SESSION['masque'] = 0;

    if (!isset($_SESSION['masque']) || isset($_SESSION['masque']) && $_SESSION['masque'] == 0) {
        // Rien car on est déjà sur l'index
    } else if ($_SESSION['masque'] != 0) {

        $page = 'Location: src/html/'. ($_SESSION['masque'] + 1) .'.php';
        header($page);
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="Je_Tombe_A_Pique" content="">
        <title>Énigme 1</title>

        <!-- Bootstrap -->
        <link href="src/bootstrap/bootstrap.css" rel="stylesheet">

        <!-- CSS -->
        <link href="src/css/4.css" rel="stylesheet">
    </head>

    <body>
        <div class="container d-flex h-100 flex-column">

            <div class="row my-auto text-center" id="part1">
                <div class="col-md-12">

                    <?php if (isset($_GET['masqueTrouve']) && $_GET['masqueTrouve'] == "true") {
                        $_SESSION['masque'] = 1;
                    ?>
                        <h1 class="trouve">Félicitations, tu peux passer à l'énigme suivante !</h1>
                        <br /><img src="src/img/1.png"><br /><br />
                        <a href="src/html/2.php" class="btn btn-primary trouve">Énigme suivante</a>
                    <?php } else { ?>
                        <p>Cliquez sur ce bouton pour obtenir le premier masque.</p>
                        <a class="btn btn-primary" href="index.php?masqueTrouve=true">Clique !</a>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </body>

</html>