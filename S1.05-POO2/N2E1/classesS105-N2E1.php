<?php

abstract class Shape0
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public abstract function area();
}

interface Shape1
{
    public function area();
}

class Triangle0 extends Shape0
{
    public function area()
    {
        return ($this->height * $this->width) / 2;
    }
}

class Rectangle0 extends Shape0
{
    public function area()
    {
        return $this->height * $this->width;
    }
}

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

class Rectangle1 implements Shape1
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
        return $this->width * $this->height;
    }
}