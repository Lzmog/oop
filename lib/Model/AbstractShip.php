<?php

namespace Model;

abstract class AbstractShip
{
    private $id;

    private $name;

    private $weaponPower = 0;

    private $strength = 0;

    abstract public function getJediFactor();
    abstract public function getType();
    abstract public function isUnderRepair();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo 'HELLO!';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {

        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }

    public function setStrength($strength)
    {
        if (false === is_numeric($strength)) {
            throw new \Exception('Invalid strength passed');
        }

        $this->strength = $strength;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return $this->getName();
    }

    public function __get($propertyName)
    {
        return $this->$propertyName;
    }
}
