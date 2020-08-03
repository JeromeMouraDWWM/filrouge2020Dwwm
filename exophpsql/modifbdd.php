<?php 
include'header.php';
include'connexionbdd.php';

$id = $_POST['fid'];
$titre = $_POST['ftitre'];
$contenu = $_POST['fcontenu'];

$insert = $pdo->prepare("UPDATE news SET titre='$titre', la_news='$contenu' WHERE id_news=$id");
$insert->execute();
?>

<p>
    La news a bien été modifié.<br>
    Titre : <?php echo $titre ?><br>
    Contenu : <?php echo $contenu ?>
</p>

<a class="btn btn-success" href="index.php" role="button">Retourner à la page d'accueil</a>