<?php

require 'rectangle.php';
require 'triangle.php';

//Nivell 2 - Exercici 1
echo "<br>N2 - E1 <br>";

$triangle = new Triangle(5, 10);
$rectangle = new Rectangle(5, 10);

echo "L'àrea del triangle és: " . $triangle->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle->area() . "<br>";
echo "<br>";