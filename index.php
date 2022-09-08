<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\CreationalPatterns\FactoryMethod\FactoryMethod;
use App\CreationalPatterns\AbstractFactory\AbstractFactory;
use App\CreationalPatterns\FactoryMethod\ConcreteCreatorOne;
use App\CreationalPatterns\FactoryMethod\ConcreteCreatorTwo;

// Creational Patterns
// Factory Method

$truck = new ConcreteCreatorOne;
$transportOne = (new FactoryMethod($truck))->exec();

$ship = new ConcreteCreatorTwo;
$transportTwo = (new FactoryMethod($ship))->exec();


// Creational Patterns
// AbstractFactory
// $abstractFactory = (new AbstractFactory)->exec();
