<?php

namespace App\CreationalPatterns\FactoryMethod;

use App\CreationalPatterns\FactoryMethod\ProductInterface;
use App\CreationalPatterns\FactoryMethod\Creator;

class ConcreteCreatorOne extends Creator
{
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProductOne();
    }
}
