<?php

// en js pour créer une variable on doit utiliser le mot clé let ou const ou var 
// const a = 10;

// en php pas de mot clé 
// on met le symbole $ devant le nom de la variable
$a = 10;

// en js le ; final est facultatif
// en PHP le ; est obligatoire
// un seul ; manquant dans la page => stop erreur fatale

$b=30; // les espaces avant et aprés le symbole d'affectation = sont facultatifs

// comme en javascript vous allez avoir 5 types de valeurs que l'on stocker dans une variable

// string => texte

$c = "bonjour les amis";
$d = "comment allez vous";

// chiffres chiffre entier / chiffre à virgule int / float
$e = 200;
$f = -50;

$1.2; // float
$h = -42.51;

// boolean
$i = true;
$j = false;

// 3 types de base variable contient 1 valeur

// 1 variable stock plusieurs valeurs => type complexe
// tableau
// objet
$k = ["pomme","poire","banane"]; // tableau simple/ tableau indexé (meme chose que js)

// tableaux associatifs qui n'existent pas en js
// contient 3 valeurs
$1 = ["nom"=>"Alain", "age"=>20,"isAdmin"=> true];
// il est conseillé de faire mettre des sauts de lignes pour chaque valeur d'un tableau associatif ( pour le rendre plus lisible)

$1 = [
    "nom" => "alain",
    "age" => 20,
    "isAdmin" => true
];

// dernier type complex objet Mais pour créer un objet en php il faut au préalable commencer par une class
// $m = {a : } ca ne marche pas

class M{}// d'abord créer une class
$m = new M(); // l'objet $m est obligatoire issue de M
// class et objet en php font l'objet d'une semaine spéciale tant le sujet contient une grande information

// en php vous avez un fichier php.ini => fichier qui permet de modifier comment php fonctionne
// il est possible via le fichier php.ini d'ajouter des fonctionnalités en + au langage php

// module xdebug => console.log pour javascript
// par défault