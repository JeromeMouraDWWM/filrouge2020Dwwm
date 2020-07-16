<?php

$host = 'localhost';
$dbname = 'seine-et-marne';
$user = 'root';
$pass = 'root';

try {
    $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    echo '<br><p>Connecté ! <br></p>';
} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br>";
    die();
} 

$q=intval($_POST['q']);

$sql = $con->prepare("SELECT `ville_nom_reel`, `ville_code_postal` FROM `villes_france_free` WHERE `ville_nom_reel` LIKE '%$q%'");
$sql->execute();
$result = $sql->fetchALL(PDO::FETCH_ASSOC);

var_dump($sql);
var_dump($result);

?>