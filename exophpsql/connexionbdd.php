<?php

$host = "localhost";
$user = "root";
$password = "root";
$dbname = "exonews";

try {
    $pdo = new PDO("mysql:host=$host;charset=utf8", $user, $password);
    $bdd = "CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8";
    $pdo->exec($bdd);
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $table = "CREATE TABLE IF NOT EXISTS news (
        id_news INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        titre VARCHAR(100),
        la_news TEXT
    )";
    $pdo->exec($table);
    
} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br>";
    die();
}
?>