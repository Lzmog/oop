<?php

require_once __DIR__ . '/lib/Ship.php';
require_once __DIR__ . '/lib/BattleManager.php';

function get_ships()
{
    $ships = [];

    $ship = new Ship('Jedi Starfighter');
    $ship->setWeaponPower(5);
    $ship->setJediFactor(15);
    $ship->setStrength(30);
    $ships['starfighter'] = $ship;

    $ship2 = new Ship('CloakShape Fighter');
    $ship2->setWeaponPower(2);
    $ship2->setJediFactor(2);
    $ship2->setStrength(70);
    $ships['cloakshape_fighter'] = $ship2;

    return $ships;
}

function didJediDestroyShipUsingTheForce(Ship $ship)
{
    $jediHeroProbability = $ship->getJediFactor() / 100;

    return mt_rand(1, 100) <= ($jediHeroProbability*100);
}