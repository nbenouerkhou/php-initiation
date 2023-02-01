<?php

// if for function ++ = >= ""
// en + de ces mots clés PHP il est livré avec 500 fonctions natives

// dans le langage => des fonctions qui vont permettre de réaliser des traitements
$tab = ["a","b","c",1,2,3];
echo count($tab). "<br>"; // 6 la taille du tableau

//php.net
// count(Countable|array| $value int $mode = COUNT_NORMAL) : int
// string
//chiffres int / float
// boolean
// array => count()
// objet

// fonction native de php pour manipuler les string
//echo
//explode permet de transformer un string en array
$description = "2,cm,mètre";
$resultat = explode(",",$description); // ["2","cm","20","mètre"];
var_dump($resultat);
echo $resultat[count($resultat)-1]."<br>";

//récuperer le nom du fichier executer
$url = "http//localhost/php-initiation/jour3/05-fonction-native.php";
$tabUrl = explode("/",$url);
echo $tabUrl[count($tabUrl) - 1]."<br>";

//htmlentities
$virus = "<script>window.location.href='https://google.fr'</script>";
echo htmlentities ($virus); // bloquer execution du html qui contien du js

//number_format-
$prix = 2532.44;
echo number_format($prix)."<br>";
echo number_format($prix,2)."<br>";
echo number_format($prix,2,",")."<br>";
echo number_format($prix,2,",", " ")."<br>";

//str_contains
// est ce qu'un texte contient un texte
$titre = "nouvelle article sur le php";
// est ce que dans $texte il ya le mot php
$recherche = str_contains($titre,"php");
var_dump($recherche);

// strlen
$paragraph = "lorem ipsum";
echo strlen ($paragraph). "<br>";

// substr replace

$activie = "j'aime manger des frites";
echo substr_replace($activie,"pomme",18,6)."<br>";
echo substr_replace($activie,"et des pomme",24,0)."<br>";