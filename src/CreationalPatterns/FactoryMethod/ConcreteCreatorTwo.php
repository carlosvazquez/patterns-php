<?php

declare(strict_types=1);

namespace App\CreationalPatterns\FactoryMethod;

use App\CreationalPatterns\FactoryMethod\ProductInterface;
use App\CreationalPatterns\FactoryMethod\Creator;

class ConcreteCreatorTwo extends Creator
{
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProductTwo();
    }
}

