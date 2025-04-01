<?php

//http://localhost/ITA-FS-PHP/Kata56/kata56.php

$paraulaIntroduida="JIAJIAJIAJIAJIA";
$arrayEquivalencies = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10, 'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'ñ' => 15, 'o' => 16, 'p' => 17, 'q' => 18, 'r' => 19, 's' => 20, 't' => 21, 'u' => 22, 'v' => 23, 'w' => 24, 'x' => 25, 'y' => 26, 'z' => 27];
$contador = 0;

//Limpiar la info introducida.
$paraulaIntroduida = strtolower($paraulaIntroduida);

while ($contador != 100) {
    $contador = 0;

    for ($i = 0; $i < strlen($paraulaIntroduida); $i++) {
        $letra = $paraulaIntroduida[$i];
        $numero = $arrayEquivalencies[$letra];
        $contador += $numero;
    }
    echo "Aquesta paraula té un valor de: " . $contador . " punts <br>";
}

echo "Enhorabona!";
