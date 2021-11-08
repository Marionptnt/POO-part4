<?php

require_once 'Cars.php';

$car = new Car('blue', 4, "fuel");

// Test sans le frein à main mis au départ

try {

    echo $car->start();
} catch (Exception $e) {

    echo $e->getMessage() . '<br>';
    echo $car->setParkBrake() . '<br>';
} finally {

    echo 'Ma voiture roule comme un donut' . '<br>';
}

// Test avec le frein à main mis au départ

echo $car->setParkBrake();

try {
    $car->start();
} catch (Exception $e) {

    echo 'ATTENTION' . $e->getMessage();
    echo $car->setParkBrake();
} finally {
    echo 'Ma voiture roule comme un donut' . '<br>';
}
