<?php
//tableau qu icontient des objets en js collection
// tableau indexé qui contient des tableaux associatifs
// tableau multi dimensions

$etudiants = [
    [
        "nom" => "Alain",
        "age" => 22,
        "competences" => ["js", "css"]
    ],
    [
        "nom" => "Celine",
        "age" => 12,
        "competences" => ["php", "sql"]
    ]
];

echo "<p{$etudiants[0]["nom"]} maitrise {$etudiants[0]["competences"][1]}</p>";