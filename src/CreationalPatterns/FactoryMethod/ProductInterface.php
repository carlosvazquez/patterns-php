<?php

namespace App\CreationalPatterns\FactoryMethod;

/**
 * The Product interface declares the operations that all concrete products must
 * implement.
 */
interface ProductInterface
{
    public function operation(): string;
}
