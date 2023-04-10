<?php

use App\Libs\CircleAreaLib;
use App\Libs\SquareAreaLib;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$service = new \App\Services\AreaCalculationService(new CircleAreaLib(), new SquareAreaLib());

echo $service->circleArea(100) . PHP_EOL;
echo $service->squareArea(5) . PHP_EOL;