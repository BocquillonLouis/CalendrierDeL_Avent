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
        <link href="src/bootstrap/bootstrap.css" rel="stylesheet">

        <!-- CSS -->
        <link href="src/css/index.css" rel="stylesheet">
    </head>

    <body>
	<center>
		Quel est le mot de passe ?
		<!-- Le mot de passe est dindon -->
		<form method="post" action="">
			<input type="text" name="saisieMdp"/>
			<input type="submit" name="validationMdp" value="Valider"/>	
		</form>
		<button><a href="2.html">Cliquez ici !</a></button>
		<?php
			if(isset($_POST['saisieMdp'])) {
				if ($_POST['saisieMdp'] == "dindon") {
					$_SESSION['masque']=5;
		?>
					<h1 class="trouve">Félicitations, tu peux passer à l'énigme suivante !</h1>
					<br /><img src="../img/5.png"><br /><br />
					<a href="6.php?" class=" btn btn-primary trouve">Énigme suivante</a>
		<?php
				}
			}
		?>
	</center>
    </body>

</html>