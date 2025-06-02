<?php

declare(strict_types=1);

require_once 'personClass.php';

$wallet = new Wallet();
$phone = new Phone();
$carKeys = new VehicleKeys();
$apartmentKeys = new HouseKeys();

$katie = new Person([
    'wallet' => $wallet,
    'phone' => $phone,
    'carKeys' => $carKeys,
    'apartmentKeys' => $apartmentKeys
]);

echo $katie->checkBeforeLeaving()."\n <br>";

if ($katie->readyToLeave()) {
    echo "Katie is ready to leave!\n";
} else {
    echo "Katie is not ready to leave!\n";
}

