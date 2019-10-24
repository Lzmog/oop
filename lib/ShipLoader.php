<?php

class ShipLoader
{
    function getShips()
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
}
