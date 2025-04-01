<?php

require 'animal.php';
require 'dog.php';
require 'cat.php';

//Nivell 1 - Exercici 1
echo "<br>N2 - E1 <br>";

$dog1 = new Dog();
$cat1 = new Cat();

echo "El gos fa: ";
$dog1->makeSound();
echo "<br>";