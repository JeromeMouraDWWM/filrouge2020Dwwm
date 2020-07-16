<!DOCTYPE html>
<html>

	<head>
  	  <title>Exercice 1 PHP</title>
  	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>

	<body>

		<h1>EXERCICE PHP 2</h1>

		<form action="formulaire_traitement.php" method="post" class="m-1">
  			<div class="form-group row">
   				<div class="col">
   					<label for="nom">Nom</label>
    				<input type="text" class="form-control" id="nom" name="nom" placeholder="Votre Nom" required>
    			</div>
    			<div class="col">
    				<label for="prenom">Prénom</label>
    				<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prénom" required>
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="email">Adresse Mail</label>
    			<input type="email" class="form-control" id="email" name="email" placeholder="nom@email.com" required>
    			<small class="form-text text-muted">Votre adresse mail ne sera partagé avec personne</small>
 			</div>
 			<div>
 				<label for="pwd">Mot de Passe :</label><br>
  				<input type="password" class="form-control" id="pwd" name="pwd" required>
  			</div>
 			<div class="form-group">
 			 	<label for="age">Age</label>
 			 	<input type="number" class="form-control" id="age" name="age" placeholder="25" required max="100">
 			</div>
 			<div class="form-check">
  				<input class="form-check-input" type="radio" name="sexe" id="homme" value="homme" required>
  				<label class="form-check-label" for="homme">Homme</label>
			</div>
			<div class="form-check">
  				<input class="form-check-input" type="radio" name="sexe" id="femme" value="femme" required>
  				<label class="form-check-label" for="femme">Femme</label>
			</div>
			<div class="form-check">
  				<input class="form-check-input" type="radio" name="sexe" id="malade" value="malade" required>
  				<label class="form-check-label" for="malade">Malade Mentale</label>
			</div>
			<br>
			<button type="reset" class="btn btn-primary">Réessayer</button>
  			<button type="submit" class="btn btn-primary">Envoyez</button>
		</form>

	</body>

</html>
