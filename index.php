<?php
    require "src/html/gestionSession.php";

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
        <link href="src/css/index.css" rel="stylesheet">
    </head>

    <body>
        <?php
            $_SESSION['masque'] = 1;
        ?>
        <center>
            Cliquez sur le bouton pour obtenir le premier masque.<br><br><br><br><br><br><br><br><br><br><br><br><br>
        
            <button><a href="src/html/2.php">Cliquez ici</a></button>
        </center>
        
    </body>
</html>