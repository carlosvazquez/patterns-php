<?php
namespace App;

use App\Interfaces\CarServiceInterface;

/**
 * The TireRotation class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class TireRotation implements CarServiceInterface {
  /**
  * The CarServiceInterface instance.
  *
  * @var \App\Interfaces\CarServiceInterface
  */
  protected $carService;

   /**
  * The OilChange instance.
  *
  * @param \App\Interfaces\CarServiceInterface $carService
  *
  * @return void
  */
  public function __construct(CarServiceInterface $carService) {
    $this->carService = $carService;
  }

 /**
  * Gets Tire Rotation plus other services cost.
  *
  * @return int
  */
  public function getCost() {
    return 15 + $this->carService->getCost();
  }
}
