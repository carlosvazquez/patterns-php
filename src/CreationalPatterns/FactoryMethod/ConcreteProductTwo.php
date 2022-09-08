<?php

namespace App\CreationalPatterns\FactoryMethod;

use App\CreationalPatterns\FactoryMethod\ProductInterface;

/**
 * Concrete Creators override the factory method in order to change the
 * resulting product's type.
 */
class ConcreteProductTwo implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
