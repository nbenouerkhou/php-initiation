<?php
$serveur =[
    "source" => "c:\\",
    "langage" => "HTML",
    "protocole" => "http",
    "host" => "localhost",
    "fichier" => "index.php"
];

$adresse = "{$serveur["protocole"]}://{$serveur["host"]}";

echo "<p>XAMPP lance un serveur qui écoute l'adresse {$adresse}</p>";
echo "<p>le fichier en cours d'exécution est {$adresse}/{$serveur["fichier"]}</p>";