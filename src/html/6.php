<?php
    require "gestionSession.php";

    if (!isset($_SESSION['masque']) || isset($_SESSION['masque']) && $_SESSION['masque'] == 0) {
        header('Location: ../../index.php');
    } else if ($_SESSION['masque'] != 5) {

        $page = 'Location: '. ($_SESSION['masque'] + 1) .'.php';
        header($page);
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="Je_Tombe_A_Pique" content="">
        <title>Énigme 6</title>

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
                        $_SESSION['masque'] = 6;
                    ?>
                        <h1 class="trouve">Félicitations, tu peux passer à l'énigme suivante !</h1>
                        <br /><img src="../img/6.png"><br /><br />
                        <a href="7.php" class="btn btn-primary trouve">Énigme suivante</a>

                    <?php } else { ?>
                        <p>Clique sur ce bouton pour afficher le masque</p>
                        <!-- Petit indice : essayez de désactiver Javascript ... -->
                        <a href="6.php?masqueTrouve=true" onclick="desactiver()" class="btn btn-primary trouve" disabled>Clique</a>
                    <?php } ?>
                    
                </div>
            </div>
        </div>

        <script type="text/javascript">
            let button = document.querySelector('div');
            let html = document.querySelector('html');

            // Appui bouton = Non non non
            function desactiver() {
                window.event.preventDefault();
            }

            // Clic gauche = Non non non
            button.onclick = function() {
                alert("Tu n'appuieras jamais sur ce bouton ! Mouahaha !");
                e.preventDefault();
            };

            // Clic droit = Non non non
            button.onauxclick = function(e) {
                e.preventDefault();
                alert("Tu n'appuieras jamais sur ce bouton ! Mouahaha !");
            }
        </script>
    </body>

</html>