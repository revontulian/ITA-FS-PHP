<?php

class Usuari
{

    protected $nom;
    protected $correu;

    public function __construct($nom, $correu)
    {
        $this->nom = $nom;
        $this->correu = $correu;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getCorreu()
    {
        return $this->correu;
    }

    public function __toString()
    {
        return "Usuari: {$this->nom} {$this->correu}";
    }
}
