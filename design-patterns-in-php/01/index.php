<?php 
require __DIR__ . '/vendor/autoload.php';
use App\BasicInspection;
use App\OilChange;
use App\TireRotation;

// Decorators
echo (new TireRotation(new OilChange(new BasicInspection)))->getCost();
