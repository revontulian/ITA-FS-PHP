<?php

require "turbo.php";

class Car
{
    use Turbo;

    public $marca;
    public $matricula;
    public $combustible;
    public $velocitatMax;

    public function __construct($marca, $matricula, $combustible, $velocitatMax)
    {
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->combustible = $combustible;
        $this->velocitatMax = $velocitatMax;
    }

    public function getInfo()
    {
        return "Marca: $this->marca, Matricula: $this->matricula, Combustible: $this->combustible, Velocitat Max: $this->velocitatMax";
    }
}
