<?php
namespace App\Interfaces;

/**
 * Interface CarServiceInterface.
 *
 * The car service implementation contract.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
interface CarServiceInterface
{
 /**
  * Gets the service cost.
  *
  * @return int
  */
	public function getCost();
}