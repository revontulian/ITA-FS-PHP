<?php

require 'shape1.php';

class Cercle1 implements Shape1
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return ($this->radius ** 2) * pi();
    }
}