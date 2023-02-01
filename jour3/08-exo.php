<?php
$formation = [
    [
        "nom" => "js",
        "prix" => "2300.20",
        "sujets" => ["install", "navigateur", "formulaire"]
    ],
    [
        "nom" => "php",
        "prix" => "750.55",
        "sujets" => ["xampp", "apache"]
    ]
];

foreach($formation as $forma){
    echo "<p>la formation {$forma["nom"]} coute". number_format($forma["prix"],1,","," "). " euros et contient ".count($forma ["sujets"]).' sujets'."</p>";
}

foreach($formation as $forma){
    $prixFr = number_format($forma["prix"],1,","," ");
    $nbSujet = count($forma["sujets"]);
    echo "<p>la formation {$forma["nom"]} coute {$prixFr} euros et contient {$nbSujet} sujets</p>";
}