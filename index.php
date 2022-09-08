<?php

declare( strict_types = 1 );

require __DIR__ . '/vendor/autoload.php';

use App\CreationalPatterns\FactoryMethod\FactoryMethod;

// Creational Patterns
// Factory Method
$factoryMethod = (new FactoryMethod)->exec();

