<?php
$villes=[
    [
        "nom" => "paris",
        "nbHabitant" => 50_000_000,
        "arrondissements" => 20,
        "monuments" => ["sacré coeur", "tour eiffel"]
    ],
    [
        "nom" => "marseille",
        "nbHabitant" => 30_000_000,
        "arrondissements" => 15,
        "monuments" => ["vieux port", "vélodrome"]
    ]
];

for($i = 0; $i < count($villes); $i++){
    echo "<p>lorsque je vais a {$villes[$i]["nom"]} je vais visiter deux monuments : {$villes[$i]["monuments"][0]} et {$villes[$i]["monuments"][1]}</p>";
}

foreach($villes as $v){
    echo "<p>lorsque je vais à {$v["nom"]} je vais visiter deux monuments : {$v["monuments"][0]} et {$v["monuments"][1]}</p>";
}