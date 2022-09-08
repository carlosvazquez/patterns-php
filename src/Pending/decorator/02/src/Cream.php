<?php
namespace App;

/**
 * The Cream class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class Cream implements BeverageInterface {
 /**
  * The BeverageInterface instance.
  *
  * @var \App\BeverageInterface
  */
  protected $beverage;

 /**
  * The Beverage instance.
  *
  * @param \App\BeverageInterface $beverage
  *
  * @return void
  */
  public function __construct(BeverageInterface $beverage) {
    $this->beverage = $beverage;
  }

 /**
  * Gets the beverage with cream cost.
  *
  * @return int
  */
  public function getCost()
  {
    return $this->beverage->getCost() + 1;
  }

 /**
  * Gets the beverage with cream description.
  *
  * @return str
  */
  public function getDescription()
  {
    return $this->beverage->getDescription() . " con crema";
  }
}