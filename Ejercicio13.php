<?php

$Animales = array();
array_push($Animales, "Perro", "Gato", "Raton", "Araña", "Mosca");

$Numeros = array();
array_push($Numeros, "1986", "1996", "2015", "78", "86");

$Labo3 = array();
array_push($Labo3, "php", "mysql", "html5", "typescript", "ajax");

$ArrayMerge = array_merge($Animales, $Numeros, $Labo3);

print_r($ArrayMerge);

?>