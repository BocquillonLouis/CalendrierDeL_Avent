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
        <link href="../css/4.css" rel="stylesheet">
    </head>

    <body>

        <div class="container d-flex h-100 flex-column">

            <div class="my-auto text-center">
                <div class="col-md-12">

                    <?php if (isset($_GET['masqueTrouve']) && $_GET['masqueTrouve'] == "true") {
                        $_SESSION['masque'] = 3;
                    ?>
                        <h1 class="trouve">Félicitations, tu peux passer à l'énigme suivante !</h1>
                        <br /><img src="../img/3.png"><br /><br />
                        <a href="4.php" class="btn btn-primary trouve">Énigme suivante</a>

                    <?php } else { ?>
                        <?php
                        echo '<p class="lead">';
                            for ($j=0; $j < 32; $j++) { 
                                for ($i = 0; $i < 100; $i++) { 
                                    echo 'o';
                                }
                                echo "<br />";
                            }
                            
                            echo 'oooooooooooooooooooooo<a href="3.php?masqueTrouve=true">0</a>ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br />';

                            for ($j=0; $j < 26; $j++) { 
                                for ($i = 0; $i < 100; $i++) { 
                                    echo 'o';
                                }
                                echo "<br />";
                            }
                            echo '</p>';
                        ?>

                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </body>

</html>