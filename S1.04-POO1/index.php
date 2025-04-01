<?php
require 'classesS104.php';

//Nivell 1 - Exercici 1
echo "<br>N1 - E1 <br>";

$Empleat1 = new Employee();
$Empleat1->initialize("Lorenzo Crevi", 5000);
$Empleat1->showEmployee();
echo "<br>";

//Nivell 1 - Exercici 2
echo "<br>N1 - E2 <br>";

$triangle1 = new Triangle(5, 10);
$rectangle1 = new Rectangle(5, 10);

echo "L'àrea del triangle és: " . $triangle1->area() . "<br>";
echo "L'àrea del rectangle és: " . $rectangle1->area() . "<br>";
echo "<br>";

//Nivell 2 - Exercici 1
echo "<br>N2 - E1 <br>";

require 'PokerDiceClass.php';

$dau0 = new PokerDice();
$dau0->shapeName();
echo "<br>";

$numTirades = 4;
$tirada = [];

//Fem diverses tirades
for ($i = 0; $i < $numTirades; $i++) {
    tirar();
}
echo "El total de tirades és: " . getTotalThrows() . "<br>";

?>