<?php

declare(strict_types=1);

class Wallet
{
    public function getDescription(): string
    {
        return "Wallet check!";
    }

    public function getBalance(): float
    {
        return 100.0; // Example balance
    }

    public function checkCards(): bool
    {
        return true; // Assume cards are present
    }
}
