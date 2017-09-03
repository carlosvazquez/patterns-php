<?php
namespace App\Tests;

use App\BasicInspection;
use PHPUnit\Framework\TestCase;

/**
* 
*/
class BasicInspectionTest extends TestCase
{
  /** @test */
  function it_get_basic_cost()
  {
    $BasicInspection = new BasicInspection;
    $this->assertEqual($BasicInspection->getCost(), 25);
  }
}