<?php
    require "gestionSession.php";

    if (!isset($_SESSION['masque']) || isset($_SESSION['masque']) && $_SESSION['masque'] == 0) {
        header('Location: ../../index.php');
    } else if ($_SESSION['masque'] != 8) {

        $page = 'Location: '. ($_SESSION['masque'] + 1) .'.php';
        header($page);
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="Je_Tombe_A_Pique" content="">
        <title>Énigme 9</title>

        <!-- Bootstrap -->
        <link href="../bootstrap/bootstrap.css" rel="stylesheet">

        <!-- CSS -->
        <link href="../css/4.css" rel="stylesheet">
    </head>

    <body>
        <div class="container d-flex h-100 flex-column">
            <div class="row my-auto text-center" id="part1">
                <div class="col-md-12">

                    <?php if (isset($_GET['masqueTrouve']) && $_GET['masqueTrouve'] == "true") {
                        $_SESSION['masque'] = 9;
                    ?>
                        <h1 class="trouve">Félicitations, tu peux passer à l'énigme suivante !</h1>
                        <br /><img src="../img/9.png"><br /><br />
                        <a href="9.php" class="btn btn-primary trouve">Énigme suivante</a>
                    <?php } else { ?>
                        <p class="lead">Ce lien a l'air cassé ... Comment l'arranger ?</p>
                        <!-- Indice : quelle était la forme des URLs lors des énigmes précédentes ? -->
                        <a class="btn btn-primary" href="">Ce lien ne fonctionne pas</a>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </body>

</html>