<?php

abstract class Animal
{
    public $name;

    function makeSound() {}
}

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