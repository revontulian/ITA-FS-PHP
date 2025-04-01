<?php

require 'animal.php';
require 'dog.php';
require 'cat.php';

//Nivell 1 - Exercici 1
echo "<br>N2 - E1 <br>";

$dog1 = new Dog("Pluto");
$cat1 = new Cat("Garfield");

echo "El gos ". $dog1->getName() ." fa: ";
$dog1->makeSound();
echo "<br>";