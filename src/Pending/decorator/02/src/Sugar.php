<?php
namespace App;

/**
 * The Sugar class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class Sugar implements BeverageInterface {
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
  * Gets the beverage with sugar cost.
  *
  * @return int
  */
  public function getCost()
  {
    return $this->beverage->getCost() + 2;
  }

 /**
  * Gets the beverage with sugar description.
  *
  * @return str
  */
  public function getDescription()
  {
    return $this->beverage->getDescription() . " con sugar";
  }

}