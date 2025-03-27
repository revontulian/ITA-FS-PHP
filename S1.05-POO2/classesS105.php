<?php

require 'abstractS105.php';

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

class Triangle0 extends Shape0
{
    public function area()
    {
        return ($this->height * $this->width) / 2;
    }
}

class Rectangle0 extends Shape0
{
    public function area()
    {
        return $this->height * $this->width;
    }
}

class Triangle1 implements Shape1
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle1 implements Shape1
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Cercle1 implements Shape1
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return ($this->radius ** 2) * pi();
    }
}