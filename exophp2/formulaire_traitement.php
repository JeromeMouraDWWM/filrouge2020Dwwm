<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];
$pwd = $_POST['pwd'];

?>

<!DOCTYPE html>
<html>

	<head>
  	  <title>Exercice 1 PHP</title>
  	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>

	<body>

		<h1>EXERCICE PHP 2</h1>

		<p>
			<?php
				echo '
				Bonjour, les informations renseignées sont les suivantes : <br>
				Votre nom : ' .$nom. '
				<br> Votre prénom : ' .$prenom. '
				<br> Votre email : ' .$email. '
				<br> Votre mot de passe : ' .$pwd. '
				<br> Votre age : ' .$age. '
				<br> Votre sexe : ' .$sexe;
			?>
		</p>

	</body>

</html>