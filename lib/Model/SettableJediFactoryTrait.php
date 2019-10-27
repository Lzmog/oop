<?php

namespace Model;

trait SettableJediFactoryTrait
{
    private $jediFactory;

    public function getJediFactor()
    {
        return $this->jediFactory;
    }

    /**
     * @param mixed $jediFactory
     */
    public function setJediFactor($jediFactory)
    {
        $this->jediFactory = $jediFactory;
    }
}
