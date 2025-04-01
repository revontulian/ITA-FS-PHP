<?php

require 'shape.php';

class Triangle1 implements Shape1
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return ($this->width * $this->height) / 2;
    }
}