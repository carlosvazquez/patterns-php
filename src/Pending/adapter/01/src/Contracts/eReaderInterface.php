<?php
namespace App\Contracts;

/**
 * Interface eReaderInterface.
 *
 * The eReader device implementation contract.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
interface eReaderInterface {

 /**
  * Gets the turn on action.
  *
  * @return str
  */
  public function turnOn();

 /**
  * Gets the press next button action.
  *
  * @return str
  */
  public function pressNextButton();
}
