<?php

require_once 'animal.php';

class Dog extends Animal
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function makeSound()
    {
        echo "Bup, bup!";
    }
}