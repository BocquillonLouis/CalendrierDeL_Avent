<?php
    require "gestionSession.php";

    if (!isset($_SESSION['masque']) || isset($_SESSION['masque']) && $_SESSION['masque'] == 0) {
        header('Location: ../../index.php');
    } else if ($_SESSION['masque'] != 3) {

        $page = 'Location: '. ($_SESSION['masque'] + 1) .'.php';
        header($page);
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="Je_Tombe_A_Pique" content="">
        <title>Énigme 4</title>

        <!-- Bootstrap -->
        <link href="../bootstrap/bootstrap.css" rel="stylesheet">

        <!-- CSS -->
        <link href="../css/4.css" rel="stylesheet">
    </head>

    <body>

        <div class="container d-flex h-100 flex-column">

            <div class="row my-auto text-center" id="part1">
                <div class="col-md-12">

                    <!-- Test bon mdp saisi -->
                    <?php if (isset($_POST['mdp']) && $_POST['mdp'] == 276) {
                        $_SESSION['masque'] = 4;
                    ?>
                        <h1 class="trouve">Félicitations, tu peux passer à l'énigme suivante !</h1>
                        <br /><img src="../img/4.png"><br /><br />
                        <a href="5.php" class="btn btn-primary trouve">Énigme suivante</a>

                    <?php } else { ?>

                        <?php if (isset($_POST['mdp'])) {?>
                            <div class="alert alert-danger" role="alert">Mauvais mot de passe</div>
                        <?php } ?>
                        
                        <h3>Voici 3 chiffres : 6, 2, 7. Saurez-vous trouver le mot de passe, composé de ces 3 chiffres ?</h3><br />

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="mdp">Mot de passe :</label>
                                <input type="number" name="mdp" min="267" max="762">
                            </div>
                        </form>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </body>

</html>