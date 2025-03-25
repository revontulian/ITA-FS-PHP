<?php

//N1 Exercici 3

//a
$X = 6; //integer
$Y = 13; //integer
$M = 3286; //double
$N = 9283; //double

echo "La variable X conté el valor $X i la variable Y conté el valor $Y <br>";
echo "<br>";

echo "Operacions:";
echo "suma: " . ($X + $Y) . "<br>";
echo "resta: " . ($X - $Y) . "<br>";
echo "multiplicació: " . ($X * $Y) . "<br>";
echo "divisió: " . ($X / $Y) . "<br>";
echo "mòdul: " . ($X % $Y) . "<br>";

echo "La variable M conté el valor $M i la variable N conté el valor $N <br>";
echo "<br>";

echo "Operacions:";
echo "suma: " . ($M + $N) . "<br>";
echo "resta: " . ($M - $N) . "<br>";
echo "multiplicació: " . ($M * $N) . "<br>";
echo "divisió: " . ($M / $N) . "<br>";
echo "mòdul: " . ($M % $N) . "<br>";
echo "<br>";

echo "Per totes les variables: X, Y, M i N. <br>";
echo "Dobles respectius: " . 2 * $X . ", " . 2 * $Y . ", " . 2 * $M . ", " . 2 * $N . "<br>";
echo "Suma total: " . ($X + $Y + $M + $N) . "<br>";
echo "Producte total: " . ($X * $Y * $M * $N) . "<br>";

//b
function calcular(float $operando1, float $operando2, string $operador): mixed
{
    switch ($operador) {
        case "+":
            return $operando1 + $operando2;
            break;
        case "-":
            return $operando1 - $operando2;
            break;
        case "*":
            return $operando1 * $operando2;
            break;
        case "/":
            return $operando1 / $operando2;
            break;
        default:
            return "Operació no vàlida";
    }
}