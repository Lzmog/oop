<?php

namespace Model;

class Ship extends AbstractShip
{
    use SettableJediFactoryTrait;

    /** @var bool */
    private $underRepair;

    public function __construct($name)
    {
        parent::__construct($name);

        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @return bool
     */
    public function isUnderRepair()
    {
        return $this->underRepair;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Empire';
    }
}
