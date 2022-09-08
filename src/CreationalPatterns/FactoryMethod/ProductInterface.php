<?php

declare(strict_types=1);

namespace App\CreationalPatterns\FactoryMethod;

/**
 * The Product interface declares the operations that all concrete products must
 * implement.
 */
interface ProductInterface
{
    public function operation(): string;
}
