<?php

class Employee
{
    public $name;
    public $salary;

    public function initialize($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function showEmployee()
    {
        echo "El nom de l'empleat és: " . $this->name . "<br>";
        if ($this->salary > 6000) {
            echo "L'empleat ha de pagar impostos<br>";
        } else {
            echo "L'empleat no ha de pagar impostos<br>";
        }
    }
}

class Shape
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}

class Triangle extends Shape
{
    public function area()
    {
        return ($this->height * $this->width) / 2;
    }
}

class Rectangle extends Shape
{
    public function area()
    {
        return $this->height * $this->width;
    }
}