<?php 
namespace App;

/**
 * The Coffee class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class Coffee implements BeverageInterface {

 /**
  * Gets the beverage cost.
  *
  * @return int
  */
  public function getCost()
  {
    return 10;
  }

 /**
  * Gets the beverage description.
  *
  * @return str
  */
  public function getDescription()
  {
    return "Café americano";
  }
}