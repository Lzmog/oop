<?php

require_once __DIR__ . '/lib/Ship.php';
require_once __DIR__ . '/lib/BattleManager.php';
require_once __DIR__ . '/lib/ShipLoader.php';
require_once __DIR__ . '/lib/BattleResult.php';

$configuration = [
    'db_dsn'  => 'mysql:host=localhost;dbname=symfony',
    'db_user' => 'symfony',
    'db_pass' => 'symfony',
];

