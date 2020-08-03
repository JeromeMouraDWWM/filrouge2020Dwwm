<?php 
include'header.php';
include'connexionbdd.php';


$titre = $_POST['ftitre'];
$contenu = $_POST['fcontenu'];

$insert = $pdo->prepare("INSERT INTO `news`(`titre`, `la_news`) VALUES ('$titre', '$contenu')");
$insert->execute();
?>

<p>
    La news a bien été enregistré.<br>
    Titre : <?php echo $titre ?><br>
    Contenu : <?php echo $contenu ?>
</p>

<a class="btn btn-success" href="index.php" role="button">Retourner à la page d'accueil</a>
