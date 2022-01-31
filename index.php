<?php

require_once 'Cars.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

$skate = new Skateboard('orange', 1);
$car = new Car('blue', 4, 'electric');
$bike = new Bicycle('red', 2);

echo 'Le skate ' . $skate->getColor() . ' n\'a pas d\'éclairage' . '<br>' . '<br>';

// Partie exceptions

// Test sans le frein à main mis au départ

try {

    echo $car->start();

} catch (Exception $e) {

    echo $e->getMessage();
    echo $car->setHasParkBrake(false);

} finally {

    echo 'Ma voiture roule comme un donut' . PHP_EOL;
}
