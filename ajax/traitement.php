<?php

$host = 'localhost';
$dbname = 'seine-et-marne';
$user = 'root';
$pass = 'root';

try {
    $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br>";
    die();
} 

$q=($_GET['q']);

$sql = $con->prepare("SELECT `ville_nom_reel`, `ville_code_postal` FROM `villes_france_free` WHERE `ville_nom_reel` LIKE '$q%'");
$sql->execute();
$result = $sql->fetchALL(PDO::FETCH_ASSOC);
$reslen = count($result);

/*var_dump($result);
echo"<br>";
var_dump($reslen);*/


for ($i=0; $i < $reslen; $i++) { 
    echo '<div class="resultat" onclick="copyResult()">' .$result[$i]['ville_nom_reel'].'</div><br>';
}

?>