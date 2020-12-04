<?php
    require "gestionSession.php";

    if (!isset($_SESSION['masque']) || isset($_SESSION['masque']) && $_SESSION['masque'] == 0) {
        header('Location: ../../index.php');
    } else if ($_SESSION['masque'] != 2) {

        $page = 'Location: '. ($_SESSION['masque'] + 1) .'.php';
        header($page);
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="Je_Tombe_A_Pique" content="">
        <title>Énigme 3</title>

        <!-- Bootstrap -->
        <link href="../bootstrap/bootstrap.css" rel="stylesheet">

        <!-- CSS -->
        <link href="../css/2.css" rel="stylesheet">
    </head>

    <body>

        <div class="container d-flex h-100 flex-column">

            <div class="row my-auto text-center" id="part1">
                <div class="col-md-12">

                    <?php if (isset($_GET['masqueTrouve']) && $_GET['masqueTrouve'] == "true") {
                        $_SESSION['masque'] = 3;
                    ?>
                        <!-- Code si masque trouvé (énigme résolue) -->

                    <?php } else { ?>
                        <!-- Code si masque pas encore trouvé -->
                        <?php echo 'session : ' . $_SESSION['masque'];
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </body>

</html>