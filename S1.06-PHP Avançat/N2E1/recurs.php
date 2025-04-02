<?php

require 'tipus.php';
require 'tema.php';

class RecursDidactic {
    private string $nom;
    private Tema $tema;
    private string $url;
    private Tipus $tipus;

public function __construct(string $nom, Tema $tema, string $url, Tipus $tipus) {
    $this->nom = $nom;
    $this->tema = $tema;
    $this->url = $url;
    $this->tipus = $tipus;
}

public function getNom(): string {
    return $this->nom;
}

public function setNom(string $nom): void {
    $this->nom = $nom;
}

public function getTema(): Tema {
    return $this->tema;
}

public function setTema(Tema $tema): void {
    $this->tema = $tema;
}

public function getUrl(): string {
    return $this->url;
}

public function setUrl(string $url): void {
    $this->url = $url;
}

public function getTipus(): Tipus {
    return $this->tipus;
}

public function setTipus(Tipus $tipus): void {
    $this->tipus = $tipus;
}

public function showResource():void{
    echo "Recurs: " . $this->nom . "<br>";
    echo "Tema: " . $this->tema->value . "<br>";
    echo "URL: " . $this->url . "<br>";
    echo "Tipus: " . $this->tipus->value . "<br>";}

    
}

//Prova
$recurs = new RecursDidactic("Primer tema", Tema::SQL, "https://example.com", Tipus::VIDEO);
$recurs1 = new RecursDidactic("Segon tema", Tema::PHP, "https://example1.com", Tipus::ARTICLE_WEB);

$recurs1->showResource();