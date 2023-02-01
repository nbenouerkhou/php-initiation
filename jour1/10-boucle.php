<?php

// boucle fonctionne meme maniere que sur javascript

// dans les parenthese de for 

// $i = 0; incrément
// $i < 3; condition de sortie de boucle
// $i++; augmenter de + 1 la variable $i et de stocker le resultat du calcul


for($i = 0; $i < 3; $i++){

}

?>
<?php for($i = 0; $i < 1000; $i++) : ?>
    <h1><?php echo $i ?></h1>
<?php endfor ?>

<?php
for($i = 0; $i < 1000; $i++){
    echo "<h1>$i</h1>";
}
