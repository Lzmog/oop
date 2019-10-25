<?php

class ShipLoader
{
    public function getShips()
    {
        $ships = array();
        $shipsData = $this->queryForShips();
        foreach ($shipsData as $shipData) {
            $ship = new Ship($shipData['name']);
            $ship->setWeaponPower($shipData['weapon_power']);
            $ship->setJediFactor($shipData['jedi_factor']);
            $ship->setStrength($shipData['strength']);
            $ships[] = $ship;
        }
        return $ships;
    }

    private function queryForShips()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=symfony', 'symfony', 'symfony');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        $shipArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipArray;
    }
}
