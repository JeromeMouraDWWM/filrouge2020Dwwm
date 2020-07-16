<?php

    $sql = $dbh->prepare("SELECT `ville_nom_reel`, `ville_code_postal` FROM `villes_france_free` WHERE `ville_nom_reel` LIKE '%$q%'");
    $sql->execute();
    
?>