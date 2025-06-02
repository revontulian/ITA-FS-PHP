<?php

declare(strict_types=1);

require_once 'walletClass.php';
require_once 'phoneClass.php';
require_once 'vehicleKeysClass.php';
require_once 'houseKeysClass.php';

class Person
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function hasRequiredItems(): array
    {
        $requiredItems = [
            'wallet' => false,
            'phone' => false,
            'vehicleKeys' => false,
            'houseKeys' => false
        ];
        
        foreach ($this->items as $item) {
            if ($item instanceof Wallet) {
                $requiredItems['wallet'] = true;
            }
            if ($item instanceof Phone) {
                $requiredItems['phone'] = true;
            }
            if ($item instanceof VehicleKeys) {
                $requiredItems['vehicleKeys'] = true;
            }
            if ($item instanceof HouseKeys) {
                $requiredItems['houseKeys'] = true;
            }
        }
        
        return $requiredItems;
    }

    public function checkBeforeLeaving(): string
    {
        $description = "Checking items before leaving:\n";
        foreach ($this->items as $item) {
            if (method_exists($item, 'getDescription')) {
                $description .= $item->getDescription() . "\n";
            }
        }
        return $description;
    }

    public function readyToLeave(): bool
    {
        foreach ($this->hasRequiredItems() as $item) {
            if ($item == false) {
                return false;
            }
        }
        return true;
    }

    public function checkWallet(): string
    {
        if (isset($this->items['wallet']) && method_exists($this->items['wallet'], 'getBalance')) {
            return "Wallet balance: " . $this->items['wallet']->getBalance() . "\n";
        }
        return "No wallet found.\n";
    }
}
