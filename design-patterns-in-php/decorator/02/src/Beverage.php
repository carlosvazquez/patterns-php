<?php
namespace App;

abstract class Beverage {
  abstract protected function getCost();
  abstract protected function getDescription();
}