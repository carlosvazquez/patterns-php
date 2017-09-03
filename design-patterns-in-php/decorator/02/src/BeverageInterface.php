<?php
namespace App;
/**
 * BeverageInterface Interface.
 *
 * The beverage implementation contract.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
interface BeverageInterface {
 /**
  * Gets the beverage cost.
  *
  * @return int
  */
  public function getCost();

 /**
  * Gets the beverage description.
  *
  * @return str
  */
  public function getDescription();
}