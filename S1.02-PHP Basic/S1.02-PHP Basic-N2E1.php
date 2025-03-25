<?php

//N2 Exercici1

define ("COST_INICIAL", 10); //10 cèntims
define ("COST_ADDICIONAL", 5); //5 cèntims per minut addicional
$minutes; //minuts de trucada

function CostTrucada(int $minutes)
{
    if ($minutes <= 3) {
        return COST_INICIAL;
    } else {
        return COST_INICIAL + (COST_ADDICIONAL * ($minutes - 3));
    }
}