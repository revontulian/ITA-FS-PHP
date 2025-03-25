<?php

//Nivell 1 - Exercici 1
echo "<br>N1 - E1 <br>";

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

$Empleat1 = new Employee();
$Empleat1->initialize("Lorenzo Crevi", 5000);
$Empleat1->showEmployee();
echo "<br>";

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

//Nivell 2 - Exercici 1
echo "<br>N2 - E1 <br>";

class PokerDice
{
    private $faces = ["As", "K", "Q", "J", "8", "7"];

    public function throw()
    {
        $randomIndex = array_rand($this->faces);
        return $this->faces[$randomIndex];
    }

    public function shapeName()
    {
        echo "La última tirada ha estat: " . $this->throw() . "<br>";
    }
}

$dau0 = new PokerDice();
$dau0->shapeName();
echo "<br>";

$tirada = [];

$dau1 = new PokerDice();
$dau2 = new PokerDice();
$dau3 = new PokerDice();
$dau4 = new PokerDice();
$dau5 = new PokerDice();

function tirar()
{
    global $tirada;
    global $dau1;
    global $dau2;
    global $dau3;
    global $dau4;
    global $dau5;
    $count = 0;
    $lastThrow = [$dau1->throw(), $dau2->throw(), $dau3->throw(), $dau4->throw(), $dau5->throw()];
    echo "La tirada ha estat: " . $lastThrow[0] . " " . $lastThrow[1] . " " . $lastThrow[2] . " " . $lastThrow[3] . " " . $lastThrow[4] . "<br>";

    array_push($tirada, $lastThrow[0], $lastThrow[1], $lastThrow[2], $lastThrow[3], $lastThrow[4]);
    return $tirada;
}

function getTotalThrows()
{
    global $tirada;
    $totalTirades = count($tirada);
    return $totalTirades;
}

//Fem diverses tirades
for ($i = 0; $i < 4; $i++) {
    tirar();
}
echo "El total de tirades és: " . getTotalThrows() . "<br>";

//Nivell 3 - Exercici 1
//TO BE CONTINUED.
//echo "<br>N3 - E1 <br>";
