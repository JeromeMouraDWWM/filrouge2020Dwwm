<?php 
include'header.php';
include'connexionbdd.php';

$id = $_GET['id'];

$sup = $pdo->prepare("DELETE FROM news WHERE id_news = $id");
$sup->execute();

?>

<p>La news a bien été supprimé</p>

<a class="btn btn-success" href="index.php" role="button">Retourner à la page d'accueil</a>