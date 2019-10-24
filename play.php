<?php

declare(strict_types=1);

class Ship
{
    public $name;
}

$myship = new Ship();
$myship->name = 'Jedi Starship';

echo 'Ship name: ' . $myship->name;