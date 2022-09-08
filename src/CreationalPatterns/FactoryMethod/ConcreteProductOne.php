<?php

declare(strict_types=1);

namespace App\CreationalPatterns\FactoryMethod;

use App\CreationalPatterns\FactoryMethod\ProductInterface;

/**
 * Concrete Creators override the factory method in order to change the
 * resulting product's type.
 */
class ConcreteProductOne implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProductOne}";
    }
}
