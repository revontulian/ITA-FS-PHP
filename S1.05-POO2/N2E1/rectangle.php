<?php

require 'shape.php';

class Rectangle extends Shape
{
    public function area()
    {
        return $this->height * $this->width;
    }
}