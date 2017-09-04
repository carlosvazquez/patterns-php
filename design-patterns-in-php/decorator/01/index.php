<?php 
require __DIR__ . '/vendor/autoload.php';
use App\BasicInspection;
use App\OilChange;
use App\TireRotation;

// Decorators
// Additional Element -> Additional Element -> Basic Element
echo (new BasicInspection)->getCost(). PHP_EOL;
echo (new OilChange(new BasicInspection))->getCost(). PHP_EOL;
echo (new TireRotation(new OilChange(new BasicInspection)))->getCost(). PHP_EOL;

