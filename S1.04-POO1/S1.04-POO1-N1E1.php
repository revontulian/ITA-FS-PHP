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