<?php

declare(strict_types=1);

namespace App\CreationalPatterns\FactoryMethod;

use App\CreationalPatterns\FactoryMethod\Creator;

/**
 * Creational Patterns
 * 
 * Factory Method
 * @see https://refactoring.guru/design-patterns/factory-method
 */
class FactoryMethod 
{
    private Creator $concreteCreator;

    public function __construct(Creator $concreteCreatorClass)
    {
        $this->concreteCreator = $concreteCreatorClass;
    }

    /**
     * The Application picks a creator's type depending on the configuration or
     * environment.
     */
    public function exec()
    {
        echo "App: Launched with the ". get_class($this->concreteCreator) ." ConcreteCreator.\n";
        $this->clientCode($this->concreteCreator);
        echo "\n\n";
    }

    /**
     * The client code works with an instance of a concrete creator, albeit through
     * its base interface. As long as the client keeps working with the creator via
     * the base interface, you can pass it any creator's subclass.
     */
    private function clientCode(Creator $creator)
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
        // ...
    }
}

