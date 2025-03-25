<?php

//Nivell 1 - Exercici 1
echo "<br>N1 - E1 <br>";

abstract class Animal
{
    public $name;

    function makeSound() {}
};

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Bup, bup!";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Miau, miau!";
    }
}

$dog1 = new Dog();
$cat1 = new Cat();

echo "El gos fa: ";
$dog1->makeSound();
echo "<br>";