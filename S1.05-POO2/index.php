<?php

require 'classesS105.php';

//Nivell 1 - Exercici 1
echo "<br>N2 - E1 <br>";

$dog1 = new Dog();
$cat1 = new Cat();

echo "El gos fa: ";
$dog1->makeSound();
echo "<br>";

//Nivell 2 - Exercici 1
echo "<br>N2 - E1 <br>";

$triangle1 = new Triangle0(5, 10);
$rectangle1 = new Rectangle0(5, 10);

echo "L'àrea del triangle és: " . $triangle1->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle1->area() . "<br>";
echo "<br>";

//Nivell 3 - Exercici 1
echo "<br>N3 - E1 <br>";

$triangle2 = new Triangle1(5, 3);
$rectangle2 = new Rectangle1(8, 6);
$cercle2 = new Cercle1(5);

echo "L'àrea del triangle és: " . $triangle2->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle2->area() . "<br>";
echo "L'àrea del cercle és: " . $cercle2->area() . "<br>";