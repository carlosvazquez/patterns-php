<?php
namespace App;

class Tea implements BeverageInterface {
   /**
  * Gets the tea beverage cost.
  *
  * @return int
  */
  public function getCost()
  {
    return 8;
  }

 /**
  * Gets the tea beverage description.
  *
  * @return str
  */
  public function getDescription()
  {
    return "Té";
  }
}