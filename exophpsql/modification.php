<?php 
include'header.php';
include'connexionbdd.php';

$id = $_GET['id'];

$pre_modif = $pdo->query("SELECT * FROM news WHERE id_news = $id");

while ($modif = $pre_modif->fetch()){
    $mtitre = $modif['titre'];
    $mcontenu = $modif['la_news'];
}

?>

<form action="modifbdd.php" method="post">

    <label for="fid">ID :</label><br>
    <input type="number" id="fid" name="fid" value="<?php echo $id?>" readonly><br>

    <label for="ftitre">Titre :</label><br>
    <input type="text" id="ftitre" name="ftitre" value="<?php echo $mtitre?>"><br>

    <label for="fcontenu">Contenu :</label><br>
    <input type="text" id="fcontenu" name="fcontenu" value="<?php echo $mcontenu?>"><br><br>

    <button type="submit" class="btn btn-primary">Envoyez</button>

</form>

<a class="btn btn-success" href="index.php" role="button">Retourner à la page d'accueil</a>