<?php

class Classificator
{
    public function __construct() {}

    public function classificar(int $nota): string
    {
        if ($nota >= 60) {
            return "Primera Divisió";
        } elseif ($nota >= 45) {
            return "Segona Divisió";
        } elseif ($nota >= 33) {
            return "Tercera Divisió";
        } else {
            return "Suspès";
        }
    }
}
