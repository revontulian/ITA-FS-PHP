<?php

//N2 Exercici2

define("COST_UNIT_XOCOLATA", 1); //1€ per xocolata
define("COST_UNIT_XICLET", 0.5); //0.5€ per xiclet
define("COST_UNIT_CARAMEL", 1.5); //1.5€ per caramel


function CostXocolates(int $numXocolates)
{
    return $numXocolates * COST_UNIT_XOCOLATA;
}

function CostXiclets(int $numXiclets)
{
    return $numXiclets * COST_UNIT_XICLET;
}

function CostCaramels(int $numCaramels)
{
    return $numCaramels * COST_UNIT_CARAMEL;
}

function TotalCost(int $numXocolates, int $numXiclets, int $numCaramels)
{
    return CostXocolates($numXocolates) + CostXiclets($numXiclets) + CostCaramels($numCaramels);
}

echo "Programa per calcular el cost de la compra. <br>";
$numXocolates = 2;
$numXiclets = 1;
$numCaramels = 1;

echo "El cost total de la compra és de " . TotalCost($numXocolates, $numXiclets, $numCaramels) . "€. <br>";