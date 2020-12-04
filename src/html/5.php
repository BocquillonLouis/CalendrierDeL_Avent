<?php
    require "gestionSession.php";

    if (!isset($_SESSION['masque']) || isset($_SESSION['masque']) && $_SESSION['masque'] == 0) {
        header('Location: ../../index.php');
    } else if ($_SESSION['masque'] != 4) {

        $page = 'Location: '. ($_SESSION['masque'] + 4) .'.php';
        header($page);
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="Je_Tombe_A_Pique" content="">
        <title>Enigme 5</title>

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
                    <?php if (isset($_POST['mdp']) && $_POST['mdp'] == "dindon") {
                        $_SESSION['masque'] = 5;
                    ?>
                        <h1 class="trouve">Félicitations, tu peux passer à l'énigme suivante !</h1>
                        <br /><img src="../img/5.png"><br /><br />
                        <a href="6.php" class="btn btn-primary trouve">Énigme suivante</a>

                    <?php } else { ?>

                        <?php if (isset($_POST['mdp'])) {?>
                            <div class="alert alert-danger" role="alert">Mauvais mot de passe</div>
                        <?php } ?>
                        
                        <h3>Cette fois ci, vous devez trouver le mot de passe sans indice ... Bonne chance !</h3><br />
                        <!-- Le mot de passe est : dindon -->

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="mdp">Mot de passe :</label>
                                <input type="text" name="mdp">
                            </div>
                        </form>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </body>

</html>