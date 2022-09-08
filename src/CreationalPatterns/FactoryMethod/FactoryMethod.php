<?php

declare( strict_types = 1 );

namespace App\CreationalPatterns\FactoryMethod;

use App\CreationalPatterns\FactoryMethod\Creator;
use App\CreationalPatterns\FactoryMethod\ConcreteCreatorOne;
use App\CreationalPatterns\FactoryMethod\ConcreteCreatorTwo;

// Creational Patterns
// Factory Method

class FactoryMethod 
{
    private ConcreteCreatorOne $concreteCreatorOne;
    private ConcreteCreatorTwo $concreteCreatorTwo;

    public function __construct()
    {
        $this->concreteCreatorOne = new ConcreteCreatorOne;
        $this->concreteCreatorTwo = new ConcreteCreatorTwo;
    }

    /**
     * The Application picks a creator's type depending on the configuration or
     * environment.
     */
    public function exec()
    {
    echo "App: Launched with the ConcreteCreator1.\n";
    $this->clientCode($this->concreteCreatorOne);

    echo "\n\n";

    echo "App: Launched with the ConcreteCreator2.\n";

    $this->clientCode($this->concreteCreatorTwo);
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

