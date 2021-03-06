<?php
    require "gestionSession.php";

    $_SESSION['masque'] = 6;

    if (!isset($_SESSION['masque']) || isset($_SESSION['masque']) && $_SESSION['masque'] == 0) {
        header('Location: ../../index.php');
    } else if ($_SESSION['masque'] != 6) {

        $page = 'Location: '. ($_SESSION['masque'] + 1) .'.php';
        header($page);
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="Je_Tombe_A_Pique" content="">
        <title>Énigme 7</title>

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
                        $_SESSION['masque'] = 7;
                    ?>
                        <h1 class="trouve">Félicitations, tu peux passer à l'énigme suivante !</h1>
                        <br /><img src="../img/7.png"><br /><br />
                        <a href="8.php" class="btn btn-primary trouve">Énigme suivante</a>
                    <?php } else { ?>
                        <p class="lead">Essaie de chercher un élément à décommenter dans le code.</p>
                        <!-- <a class="btn btn-primary" href="7.php?masqueTrouve=true">Bravo, tu as trouvé !</a> -->
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </body>

</html>