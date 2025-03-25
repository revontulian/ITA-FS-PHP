<?php

//Nivell 2 - Exercici 1
echo "<br>N2 - E1 <br>";

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

$triangle1 = new Triangle0(5, 10);
$rectangle1 = new Rectangle0(5, 10);

echo "L'àrea del triangle és: " . $triangle1->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle1->area() . "<br>";
echo "<br>";