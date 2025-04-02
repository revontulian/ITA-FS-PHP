<?php

require_once 'angularShape.php';
require_once 'area.php';

class Rectangle extends AngularShape implements Area
{
    public function area()
    {
        return $this->width * $this->height;
    }
}