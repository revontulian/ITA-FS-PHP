<?php

//N1 Exercici4

echo "<br>";
echo "Programa per comptar fins a 10 amb un increment de 2 <br>";
comptar();
echo "<br>";

//Paràmetres
$num = 0; //numero inicial
$delta = 2; //aqui podriem capturar els increments.
$upperLimit = 10; //aqui podriem capturar fins a quin número volem comptar.

function comptar(int $num, int $delta,int $upperLimit): int
{
    for ($i = 0; $num < $upperLimit; $i++) {
        $num += $delta;
        echo $num . "<br>";
    }
    return $num;
}

comptar(0, 3, 15);