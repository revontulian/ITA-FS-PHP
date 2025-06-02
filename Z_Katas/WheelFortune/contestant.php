<?php

class Participant
{
    protected $name;
    protected $score;

    public function __construct($name)
    {
        $this->name = $name;
        $this->score = 0;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getScore() : int
    {
        return $this->score;
    }

    public function sayLetter($letter): string
    {
        echo $this->name . " says: " . $letter . "<br>";
        return $letter;
    }
}
