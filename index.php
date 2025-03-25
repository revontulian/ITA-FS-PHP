<?php
echo "Hello World!\n";

$number = 23;
$temp = -1;
$input = 2;
$iteracio=0;
$resultat = 0;
$a = 5;
$b = 10;

if ($number % 2 == 0) {
    $temp = 0;
} else {
    $temp = 1;
}
echo "El resultat és $temp.\n";

//Add a line break
echo "\n";

while ($resultat <= 100) {
    $resultat = $input * $input;
    $input = $resultat;
    $iteracio++;
}

echo "S'ha arribat a la solució en $iteracio iteracions.\n";

//Add a line break
echo "\n";

echo "La suma de $a i $b és ".sum($a, $b).".\n";

function sum($a, $b) {
    return $a + $b;
}

class Triangle {
    public $length;
    public $height;

    public function area() {
        return $this->length * $this->height / 2;
    }
}
