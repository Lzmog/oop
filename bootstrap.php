<?php
ini_set('display_errors', 1);

spl_autoload_register(function ($className) {
    $path = __DIR__ . '/lib/' . str_replace('\\' , '/', $className) . '.php';

    if (file_exists($path)) {
        require $path;
    }
});

$configuration = [
    'db_dsn'  => 'mysql:host=localhost;dbname=symfony',
    'db_user' => 'symfony',
    'db_pass' => 'symfony',
];

