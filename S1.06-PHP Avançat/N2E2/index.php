<?php

require "car.php";

echo "<h1>Classe Car</h1>";

$car = new Car("Audi", "1234ABC", "Gasolina", 250);

echo $car->getInfo();
echo "<br>";
echo $car->boost();
echo "<br>";

