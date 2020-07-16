<?php 	include_once"header.php";
		include_once"variable.php";
//error_reporting(E_ALL & ~E_NOTICE);
?>

<h1>Exercice 1</h1>

<?php
	echo 'Ceci est une ligne créée uniquement en PHP
	<br>
	Ceci est 2ème phrase créée avec PHP
	<br>
	<a href="http://www.enita.ma/">ENITA</a>
	<br>';
?>

<h1>Exercice 2</h1>

<?php
	echo $nom. ' ';
	echo $prenom. '<br>';
	echo "$nom $prenom <br>";
	echo $nom.' '.$prenom. '<br>';
?>

<h1>Exercice 3</h1>

<h1>Calcul sur les variables</h1>

<p>
	le montant HT est égal à <?php echo $prix*$nombre ?> et est de type <?php echo gettype($prix*$nombre) ?><br>
	le montant TTC est égal à <?php echo $total_TVA ?> et est de type <?php echo gettype($total_TVA) ?><br>
	le prix <?php echo $prix ?> est une variable de type <?php echo gettype($prix) ?><br>
	le prix <?php echo $nombre ?> est une variable de type <?php echo gettype($nombre) ?><br>
	le prix <?php echo $TVA ?> est une variable de type <?php echo gettype($TVA) ?><br><br>
</p>

<h1>Exercice 4</h1>

<p>
	Le prix total HT de 10 armoires est de <?php echo $prix_armoire*$nombre ?><br>
	<?php include"condition.php" ?><br>
</p>

<?php 

var_dump($test); ?>

<form action="exo1.php" method="post" accept-charset="utf-8">
<div class="radio">
	<label>
		<input type="radio" name="exampleRadios" id="exampleRadios1" value="homme" checked>
		Homme
	</label>
</div>
<div class="radio">
	<label>
		<input type="radio" name="exampleRadios" id="exampleRadios1" value="Femme">
		Femme
	</label>
</div>
<div class="radio">
	<label>
		<input type="radio" name="exampleRadios" id="exampleRadios1" value="Malade">
		Autre
	</label>
</div>
<button type="submit" class="btn btn-primary">Envoyez</button>
</form>


<?php
$sexe = $_POST['exampleRadios'];

echo $sexe. '<br>';

$budget = 1553.89;
$achat = 1554.76;

if ($budget >= $achat) {
	echo 'Le budget permet de payer les achats<br>';
} else {
	echo 'Le budget ne permet pas de payer les achats<br>';
}

$age = 25;

if ($age < 18) {
	echo 'Vous êtes mineur <br>';
} else {
	echo 'Vous êtes majeur <br>';
}

$sept = 7;

for ($x = 1; $x <= 10; $x++) {
	echo $sept*$x. '<br>' ;
}
?>

<?php include_once"exo7.php"?>

<?php include_once"footer.php"; ?>