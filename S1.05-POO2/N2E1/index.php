<?php

require 'classesS105-N2E1.php';

//Nivell 2 - Exercici 1
echo "<br>N2 - E1 <br>";

$triangle1 = new Triangle0(5, 10);
$rectangle1 = new Rectangle0(5, 10);

echo "L'àrea del triangle és: " . $triangle1->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle1->area() . "<br>";
echo "<br>";