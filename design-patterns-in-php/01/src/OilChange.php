<?php
namespace App;
use App\Interfaces\CarServiceInterface;

/**
 * The OilChange class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class OilChange implements CarServiceInterface
{
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
  * Gets basic plus OilChange inspection cost.
  *
  * @return int
  */
	public function getCost() {
		return 29 + $this->carService->getCost();
	}
}
