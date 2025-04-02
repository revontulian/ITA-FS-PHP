<?php

require_once 'dog.php';
require_once 'cat.php';

//Nivell 1 - Exercici 1
echo "<br>N2 - E1 <br>";

$dog = new Dog("Pluto");
$cat = new Cat("Garfield");

echo "El gos ". $dog->getName() ." fa: ";
$dog->makeSound();
echo "<br>";
