<?php

require_once __DIR__ . '/lib/Ship.php';

/**
 * @param Ship $someShip
 */
function printShipSummary($someShip)
{
    echo 'Ship name: ' . $someShip->name;
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myship = new Ship();
$myship->name = 'Jedi Starship';
$myship->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

printShipSummary($myship);
echo '<hr/>';
printShipSummary($otherShip);

if ($myship->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->name . 'has more strength';
} else {
    echo $myship->name . 'has more strength';
}