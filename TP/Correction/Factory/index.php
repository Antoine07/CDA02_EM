<?php
require_once __DIR__ . '/vendor/autoload.php';

use Factory\FormFactory;

// Utilisation de la Factory
try {
    $factory = new FormFactory;
    // création des objets à l'aide de la factory
    $circile = $factory->create('circle', [4]);

    $circile->draw();

    $square = $factory->create('square', [10, 20]);

    $square->draw();

} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage();
}
