<?php

$host = 'localhost';
$dbname = 'seine-et-marne';
$user = 'root';
$pass = 'root';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    echo '<br><p>Connecté ! <br></p>';
} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br>";
    die();
}

$stmt = $dbh->prepare("SELECT `ville_nom_reel`, `ville_code_postal` FROM `villes_france_free` ORDER BY ville_code_postal ASC, ville_nom_reel ASC");
$stmt->execute();

$seine = $stmt->fetchALL(PDO::FETCH_ASSOC);
$last =  count($seine);
$i = 0;

echo '
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#listeMarne" aria-expanded="false" aria-controls="collapseExample">
    Liste des villes du 77
</button>
<div class="collapse" id="listeMarne">
';

while ( $i < $last) {
	echo $seine[$i]['ville_code_postal'] . ' ' . $seine[$i]['ville_nom_reel'] . '<br>';
	$i++;
}

echo '</div>
<p>Recherche de Code Postal</p>
<form action="exo1.php" method="post" accept-charset="utf-8">
	<div class="form-group">
 		<label for="age">Code Postal</label>
 		<div class="input-group">
 			<div class="input-group-prepend">
        		<div class="input-group-text">77</div>
        	</div>
 			<input type="number" class="form-control" id="cp" name="cp" placeholder="000" required>
 		</div>
 	</div>
 	<button type="submit" class="btn btn-primary">Envoyez</button>
</form>';

$cp = $_POST['cp'];

$cptab = $dbh->prepare("SELECT `ville_nom_reel`, `ville_code_postal` FROM `villes_france_free` WHERE `ville_code_postal` = 77$cp ORDER BY `villes_france_free`.`ville_nom_reel` ASC");
$cptab->execute();

$cprep = $cptab->fetchALL(PDO::FETCH_ASSOC);

$cplast = count($cprep);

if ($cplast != 0) {
	if ($cplast == 1) {
		echo 'Le code postal "77' .$cp. '" correspond à la ville suivante :<br>';
	} else {
		echo 'Le code postal "77' .$cp. '" correspond aux villes suivantes :<br>';
	}
	for ($i=0 ; $i < $cplast ; $i++) { 
		echo $cprep[$i]['ville_nom_reel'] .'<br>';
	}
} else {
	echo 'Ce code postal correspond à aucune ville <br>';
}

echo '</div><br>
<p>Recherche de Ville</p>
<form action="exo1.php" method="post" accept-charset="utf-8">
	<div class="form-group">
 		<label for="ville">Ville</label>
		<input type="text" class="form-control" id="ville" name="ville" onkeyup="showResult(this.value)" required>
		<div id="livesearch"></div>
 	</div>
 	<button type="submit" class="btn btn-primary">Envoyez</button>
</form>';

$vil = $_POST['ville'];

$viltab = $dbh->prepare("SELECT `ville_nom_reel`, `ville_code_postal` FROM `villes_france_free` WHERE `ville_nom_reel` = '$vil'");
$viltab->execute();

$vilrep = $viltab->fetchALL(PDO::FETCH_ASSOC);

$villast = count($vilrep);

if ($villast != 0) {
	echo 'Le code postal de la ville ' .$vilrep[0]["ville_nom_reel"]. ' est "' .$vilrep[0]["ville_code_postal"]. '".<br>';
} else {
	echo 'La ville que vous recherchez n\'existe pas dans notre base de donnée.';
}

?>