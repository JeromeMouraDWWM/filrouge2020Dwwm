<?php 
include'header.php';
include'connexionbdd.php';
?>

<table>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>

    <?php 

    $sql = $pdo->prepare("SELECT * FROM news ORDER BY id_news");
    $sql->execute();
    $listenews = $sql->fetchALL(PDO::FETCH_ASSOC);
    
    foreach ($listenews as $i){ ?>

    <tr>
        <td> <?php echo $i['id_news'] ?> </td>
        <td> <?php echo $i['titre'] ?> </td>
        <td> <?php echo $i['la_news'] ?> </td>
        <td> <a class="btn btn-warning" <?php echo 'href="modification.php?id=' .$i['id_news']. '"' ;?> role="button">Modifier</a> </td>
        <td> <a class="btn btn-danger" <?php echo 'href="suppresion.php?id=' .$i['id_news']. '"' ;?> role="button">Supprimer</a> </td>
    </tr>

    <?php } ?>

</table>

<a class="btn btn-success" href="ajout.php" role="button">Ajouter une news</a>

</body>
</html>