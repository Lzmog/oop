<?php
ini_set('display_errors', 1);
require_once __DIR__ . '/lib/Model/AbstractShip.php';
require_once __DIR__ . '/lib/Model/Ship.php';
require_once __DIR__ . '/lib/Model/RebelShip.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';

$configuration = [
    'db_dsn'  => 'mysql:host=localhost;dbname=symfony',
    'db_user' => 'symfony',
    'db_pass' => 'symfony',
];

