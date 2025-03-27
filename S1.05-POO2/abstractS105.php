<?php

abstract class Animal
{
    public $name;

    function makeSound() {}
}

abstract class Shape0
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public abstract function area();
}

interface Shape1
{
    public function area();
}