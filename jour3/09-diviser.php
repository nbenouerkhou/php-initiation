<?php


//----------------------
// variables

$depenses =[12,20,30,50];


//------------------------------
//fonctions
function total(array $tab) : int{
    return array_sum($tab);
}

echo total($depenses);


//-------------------
//execution de fonction