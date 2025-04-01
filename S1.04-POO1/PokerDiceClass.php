<?php

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

function tirar()
{
    global $tirada;
    define ("DICE_NUMBER_PER_THROW", 5);
    $lastThrow = [];
    $dau1 = new PokerDice();

    echo "La tirada ha estat: ";
    for ($i=0; $i < DICE_NUMBER_PER_THROW; $i++) {
        $lastThrow[$i] = $dau1->throw();
        echo $lastThrow[$i] . " ";
        array_push($tirada, $lastThrow[$i]);
    }
    echo "<br>";
    return $tirada;
}

function getTotalThrows()
{
    global $tirada;
    $totalTirades = count($tirada);
    return $totalTirades;
}