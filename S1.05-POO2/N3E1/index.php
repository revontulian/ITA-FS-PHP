<?php

require_once 'triangle.php';
require_once 'rectangle.php';
require_once 'cercle.php';

//Nivell 3 - Exercici 1
echo "<br>N3 - E1 <br>";

$cercle = new Cercle(5);
echo "L'àrea del cercle és: " . $cercle->area() . "<br>";

$triangle = new Triangle(5, 10);
echo "L'àrea del triangle és: " . $triangle->area() . "<br>";

$rectangle = new Rectangle(5, 10);
echo "L'àrea del rectangle és: " . $rectangle->area() . "<br>";