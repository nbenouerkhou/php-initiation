<?php
function c(float $largeur, bool $test){

}

function d () : array {
    return[];
}// il ne faut pas confondre return et echo / var_dump()

// éviter les actions invisibles de php

//declare(strict_types=1);// ajouter cette ligne pour que le typage soit strictement appliquee "23" => 23

// tableau indexé
$etudiant = ["pierre","paul","jacques","celine"];
echo "{$etudiant[3]} a découvert le PHP <br>";

//tableau associatif
$maison = [
    "adresse" => "75 rue de Lille",
    "enTravaux" => false,
    "prix" => 100_000
];
echo "la maison a couté {$maison["prix"]} euros <br>";