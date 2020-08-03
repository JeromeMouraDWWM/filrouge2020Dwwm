<?php 
include'header.php';
?>

<form action="ajoutbdd.php" method="post">

    <label for="ftitre">Titre :</label><br>
    <input type="text" id="ftitre" name="ftitre"><br>

    <label for="fcontenu">Contenu :</label><br>
    <input type="text" id="fcontenu" name="fcontenu"><br><br>

    <button type="submit" class="btn btn-primary">Envoyez</button>

</form>

<a class="btn btn-success" href="index.php" role="button">Retourner à la page d'accueil</a>