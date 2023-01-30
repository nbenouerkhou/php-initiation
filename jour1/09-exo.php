<?php
$test1 = 2 >= 2;//true
echo $test1;// 1
var_dump($test1);//true

$test2 = "a" == "ab";//false
echo $test2;//n'affiche rien
var_dump($test2);// false

$test3 = 2 =! 3 && 10 < 33;
echo $test3;