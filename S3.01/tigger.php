<?php

class Tigger
{

    private static $instances = [];

    private function __construct()
    {
        echo "Building character...<br>";
    }
    private function __clone() {}

    public function roar()
    {
        global $roarCounter;

        echo "Grrr! <br>";
        $roarCounter++;
    }

    public static function getInstance(): Tigger
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public static function getCounter(): int
    {
        global $roarCounter;
        return $roarCounter;
    }
}
