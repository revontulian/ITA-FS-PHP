<?php

//Nivell 3 - Exercici 1
echo "<br>N3 - E1 <br>";

interface Shape1
{
    public function area();
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
        return $this->radius * $this->radius * pi();
    }
}

$triangle2 = new Triangle1(5, 3);
$rectangle2 = new Rectangle1(8, 6);
$cercle2 = new Cercle1(5);

echo "L'àrea del triangle és: " . $triangle2->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle2->area() . "<br>";
echo "L'àrea del cercle és: " . $cercle2->area() . "<br>";