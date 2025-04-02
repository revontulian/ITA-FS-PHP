<?php

require_once 'shape.php';

class Triangle extends Shape
{
    public function area()
    {
        return ($this->height * $this->width) / 2;
    }
}
