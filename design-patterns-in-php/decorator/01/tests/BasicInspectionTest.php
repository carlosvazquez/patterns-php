<?php

namespace App\Tests;

use App\BasicInspection;
use App\OilChange;
use App\TireRotation;
use App\Interfaces\CarServiceInterface;

use PHPUnit\Framework\TestCase;

/**
* phpunit --colors --bootstrap vendor/autoload.php tests
*/
class BasicInspectionTest extends TestCase
{
  /** @test */
  function it_get_basic_inspection_cost()
  {
    $BasicInspection = new BasicInspection();
    $this->assertEquals($BasicInspection->getCost(), 25);
  }

  /** @test */
  function it_get_basic_inspection_plus_oilchange_cost()
  {
    $BasicInspectionPlusOilchange = new OilChange(new BasicInspection);

    $this->assertEquals($BasicInspectionPlusOilchange->getCost(), 54);
  }

  /** @test */
  function it_get_basic_inspection_plus_oilchange_plus_tirerotation_cost()
  {
    $BasicInspectionPlusOilchangePlustirerotation = new TireRotation(new OilChange(new BasicInspection));

    $this->assertEquals($BasicInspectionPlusOilchangePlustirerotation->getCost(), 69);
  }
}
