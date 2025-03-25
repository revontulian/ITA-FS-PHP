<?php

//N1 Exercici5

echo "Programa per verificar el grau d'un estudiant. <br>";
$nota = 75;

function classificar($nota)
{
    if ($nota >= 60) {
        echo "Primera Divisió. <br>";
    } elseif ($nota >= 45) {
        echo "Segona Divisió. <br>";
    } elseif ($nota >= 33) {
        echo "Tercera Divisió. <br>";
    } else {
        echo "Suspès. <br>";
    }
}

classificar($nota);