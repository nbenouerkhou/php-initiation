<?php
// 07-traitement-string.php

// oncaténation = addition plusieurs textes

$prenom = "Alain";
$nom = "DOE";

// Alain DOE découvre le PHP
$phrase = "$prenom $nom découvre le php <br>";

echo $phrase;

$phrase2 = "{$prenom} {$nom} découvre le PHP <br>";
echo $phrase2;

$phrase3 = $prenom . " " . $nom . "découvre le PHP <br>";
echo $phrase3;

// caractère d'échappement
$parole = "victor hugo a dis \"vive les misérables\"";
echo $parole;
// utilisation du symbole anti slash devant les guillemets à interpréter comme des guillemet et non comme la fin d'une string

// pour faire un saut de lign on utilse <br> ou bien <div> </div> <p> </p>

$unText = "<div>bonjour, comment ça va ?</div>";
echo $unText;

$phraseMultiligne = "hello les amis <br><br>
comment ca va? <br><br>
j'esper bien!";
echo $phraseMultiligne;



