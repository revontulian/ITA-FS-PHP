<?php

require 'shape.php';

class Triangle0 extends Shape0
{
    public function area()
    {
        return ($this->height * $this->width) / 2;
    }
}