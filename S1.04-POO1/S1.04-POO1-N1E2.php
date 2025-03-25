<?php

//Nivell 1 - Exercici 2
echo "<br>N1 - E2 <br>";

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

$triangle1 = new Triangle(5, 10);
$rectangle1 = new Rectangle(5, 10);

echo "L'àrea del triangle és: " . $triangle1->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle1->area() . "<br>";
echo "<br>";