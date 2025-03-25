<?php

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