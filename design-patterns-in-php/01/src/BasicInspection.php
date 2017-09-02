<?php
namespace App;

use App\Interfaces\CarServiceInterface;

/**
 * The BasicInspection class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class BasicInspection implements CarServiceInterface
{
 /**
  * Gets basic inspection cost.
  *
  * @return int
  */
  public function getCost() {
    return 25;
  }
}
