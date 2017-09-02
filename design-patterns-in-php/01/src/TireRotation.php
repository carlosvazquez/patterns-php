<?php
namespace App;
use App\Interfaces\CarServiceInterface;

class TireRotation implements CarServiceInterface {
	protected $carService;

	public function __construct(CarServiceInterface $carService) {
		$this->carService = $carService;
	}

	public function getCost() {
		return 15 + $this->carService->getCost();
	}

}