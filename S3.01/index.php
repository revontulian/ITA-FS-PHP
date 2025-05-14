<?php

include_once 'tigger.php';

echo "<h1>Prova de Singleton: Tigger</h1>";
$tigger = Tigger::getInstance();
$tigger->roar();
$tigger->roar();
$tigger->roar();

echo "<br>";
echo "Tigger ha rugit " . $tigger->getCounter() . " cops. <br>";

$tigger2 = Tigger::getInstance();

$tigger2->roar();
$tigger2->roar();

echo "<br>";
echo "Ara Tigger ha rugit " . $tigger->getCounter() . " cops. <br>";