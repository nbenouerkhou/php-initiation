<?php
$tabeleau = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];

for($i=0; $i <= 6; $i++){
    echo "{$tableau[$i]}<br>";
}


for($i = 0; $i < count ($tableau); $i++){
    echo "{$tableau[$i]}<br>";
}

// count() fonction native de php
// mot clé du langage PHP  if for function
// count() manière d'etre utilisé => 1er paramètre de la fonction native count() doit etre de type un tableau de type un tableau obligatoirement

/*for(let i=0; i<tableau.length; i++){
    document.querySelector("div").innerHtml += `${tableau[i]}<br>`;
} */

foreach($tableau as $jour){
    echo "{$jour}<br>";
}