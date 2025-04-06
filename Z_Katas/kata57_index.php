<?php

require_once 'kata57_personatge.php';

$personatges = [new Personatge("Cloud", 100, 50, ["Atacar", "Escut", "Concentració"]),
new Personatge("Aeris", 80, 30, ["Encantament", "Escut", "Sanació"]),
new Personatge("Tifa", 120, 40, ["Atacar", "Foc", "Invocació"])];

function mostrarPersonatgeAmbMenorVida(array $personatges): void {
    $menorVida = $personatges[0]->vida;
    $index = 0;
    foreach ($personatges as $i => $personatge) {
        if ($personatge->vida < $menorVida) {
            $menorVida = $personatge->vida;
            $index = $i;
        }
    }
    echo "El personatge amb menor vida és: " . $personatges[$index]->nom . " amb " . $menorVida . " punts de vida.<br>";
}

echo "<br>Personatges:<br>";
foreach ($personatges as $personatge) {
    echo "Nom: " . $personatge->nom . ", Vida: " . $personatge->vida . ", Mana: " . $personatge->mana . "<br>";
    echo "Accions: " . implode(", ", $personatge->accions) . "<br>";
    echo "<br>";
}

echo $personatges[0]->Comanda(0) . "<br>";
mostrarPersonatgeAmbMenorVida($personatges);
echo "<br>";