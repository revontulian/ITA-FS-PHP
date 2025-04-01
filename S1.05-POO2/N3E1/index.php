<?php


require 'triangle.php';
require 'rectangle.php';
require 'cercle.php';

//Nivell 3 - Exercici 1
echo "<br>N3 - E1 <br>";

$cercle = new Cercle1(5);

echo "L'àrea del cercle és: " . $cercle->area() . "<br>";