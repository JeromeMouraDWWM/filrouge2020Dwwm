<!DOCTYPE html>
<html>
<head>
	<title>Test PHP</title>
</head>
<body>
	<h1>Je ne m'appelle absolument pas
		<?php
		$prenom = "Jérôme";
		$age = 25;
		$homme = true;
		echo $prenom. " et j'ai moins de " .$age. " ans ! ";
		if ($homme) {
			echo "Je suis pas un homme.";
		} else {
			echo "Je suis pas une femme.";
		}
		?>
	</h1>
</body>
</html>