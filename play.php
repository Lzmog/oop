<?php

class Ship
{
    public $name;

    public $weaponPower = 0;

    public $jediFactor = 0;

    public $strength = 0;

    public function sayHello()
    {
        echo 'HELLO!';
    }

    public function getName()
    {
        return $this->name;
    }
}

$myship = new Ship();
$myship->name = 'Jedi Starship';
$myship->weaponPower = 10;

echo 'Ship name: ' . $myship->name;
echo '<hr/>';
$myship->sayHello();
echo '<hr/>';
echo $myship->getName();