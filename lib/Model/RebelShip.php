<?php

class RebelShip extends Ship
{
    public function getFavoriteJedi()
    {
        $coolJedis = ['Yoda', 'Ben Kenobi'];
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    public function getType()
    {
        return 'Rebel';
    }

    /**
     * @return bool
     */
    public function isUnderRepair()
    {
        return true;
    }
}
