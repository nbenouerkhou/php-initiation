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

// echo "<p>{$etudiants[0]["nom"]} maitrise {$etudiants[0]["competences"][1]}</p>";

// echo "<p>{$etudiants[1]["nom"]} qui a {$etudiants[1]["age"]} ans maitrise le {$etudiants[1]["competences"][0]}</p>";

foreach($etudiants as $student){
    echo "<p>{$student["nom"]} débute sur {$student["cometences"][1]} et maitrise {$student["cometences"][0]}</p>";
}