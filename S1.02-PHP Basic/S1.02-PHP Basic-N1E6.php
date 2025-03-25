<?php

//N1 Exercici6

function IsBitten()
{
    $random = rand(0, 1);
    if ($random == 0) {
        return true;
    } else {
        return false;
    }
}