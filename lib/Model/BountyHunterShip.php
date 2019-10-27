<?php

namespace Model;

class BountyHunterShip extends AbstractShip
{
    use SettableJediFactoryTrait;

    public function getType()
    {
        return 'Bounty Hunter';
    }

    public function isUnderRepair()
    {
        return true;
    }
}
