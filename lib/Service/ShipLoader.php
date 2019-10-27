<?php

namespace Service;

use Model\RebelShip;
use Model\Ship;
use Model\AbstractShip;
use Model\ShipCollection;

class ShipLoader
{
    private $shipStorage;

    public function __construct(ShipStorageInterface $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    /**
     * @return ShipCollection[]
     */
    public function getShips()
    {
        $ships = array();
        $shipsData = $this->shipStorage->fetchAllShipsData();
        foreach ($shipsData as $shipData) {
            $ships[] = $this->createShipFromData($shipData);
        }

        return new ShipCollection($ships);
    }

    /**
     * @param $id
     * @return AbstractShip|null
     */
    public function findOneById($id)
    {
        $shipArray = $this->shipStorage->fetchSingleShipData($id);

        return $this->createShipFromData($shipArray);

    }

    private function createShipFromData(array  $shipData)
    {
        if ($shipData['team'] === 'rebel') {
            $ship = new RebelShip($shipData['name']);
        } else {
            $ship = new Ship($shipData['name']);
            $ship->setJediFactor($shipData['jedi_factor']);
        }

        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setStrength($shipData['strength']);

        return $ship;
    }
}
