<?php

namespace Service;

class LoggableShipStorage implements ShipStorageInterface
{

    private $shipStorage;

    public function __construct(ShipStorageInterface $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    /**
     * @return array
     */
    public function fetchAllShipsData()
    {
        $ships = $this->shipStorage->fetchAllShipsData();
        $this->log(sprintf('Just fetched %s ships', count($ships)));

        return $ships;
    }

    /**
     * @param integer $id
     * @return array()
     */
    public function fetchSingleShipData($id)
    {
        return $this->shipStorage->fetchSingleShipData($id);
    }

    private function log($message)
    {
        echo $message;
    }
}
