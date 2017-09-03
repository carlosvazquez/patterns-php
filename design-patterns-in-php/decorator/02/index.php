<?php 
require __DIR__ . '/vendor/autoload.php';

use App\Coffee;
use App\Tea;
use App\Cream;
use App\Sugar;

echo "Bebida: " . (new Coffee)->getDescription(). PHP_EOL;
echo "Precio: " . (new Coffee)->getCost(). PHP_EOL;
echo "....................." . PHP_EOL;
echo "Bebida: " . (new Cream(new Coffee))->getDescription(). PHP_EOL;
echo "Precio: " . (new Cream(new Coffee))->getCost(). PHP_EOL;
echo "....................." . PHP_EOL;
echo "Bebida: " . (new Tea)->getDescription(). PHP_EOL;
echo "Precio: " . (new Tea)->getCost(). PHP_EOL;
echo "....................." . PHP_EOL;
echo "Bebida: " . (new Cream(new Tea))->getDescription(). PHP_EOL;
echo "Precio: " . (new Cream(new Tea))->getCost(). PHP_EOL;
echo "....................." . PHP_EOL;
echo "Bebida: " . (new Sugar(new Cream(new Coffee)))->getDescription(). PHP_EOL;
echo "Precio: " . (new Sugar(new Cream(new Coffee)))->getCost(). PHP_EOL;
