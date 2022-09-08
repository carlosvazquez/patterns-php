<?php

declare(strict_types=1);

namespace App\CreationalPatterns\FactoryMethod;

use App\CreationalPatterns\FactoryMethod\ProductInterface;

/**
 * The Creator class declares the factory method that is supposed to return an
 * object of a Product class. The Creator's subclasses usually provide the
 * implementation of this method.
 */
abstract class Creator
{
    /**
     * Note that the Creator may also provide some default implementation of the
     * factory method.
     */
    abstract public function factoryMethod(): ProductInterface;

    /**
     * Also note that, despite its name, the Creator's primary responsibility is
     * not creating products. Usually, it contains some core business logic that
     * relies on Product objects, returned by the factory method. Subclasses can
     * indirectly change that business logic by overriding the factory method
     * and returning a different type of product from it.
     */
    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->factoryMethod();
        // Now, use the product.
        $result = "Creator: The same creator's code has just worked with " .
            $product->operation();

        return $result;
    }
}
