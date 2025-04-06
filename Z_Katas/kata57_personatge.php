<?php

class Personatge{
    public string $nom;
    public int $vida;
    public int $mana;
    public array $accions = [];

    public function Comanda(int $i): void {
        echo "El personatge " . $this->nom . " ha realitzat l'acció: " . $this->accions[$i] . "<br>";
    }

    public function __construct(string $nom, int $vida, int $mana, array $accions) {
        $this->nom = $nom;
        $this->vida = $vida;
        $this->mana = $mana;
        $this->accions = $accions;
    }
}