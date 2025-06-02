<?php

declare(strict_types=1);

class Phone
{
    public function getDescription(): string
    {
        return "Smartphone check!";
    }
    
    public function makeCall(string $number): string
    {
        return "Calling " . $number;
    }
}
