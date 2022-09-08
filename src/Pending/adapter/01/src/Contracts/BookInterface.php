<?php 
namespace App\Contracts;

/**
 * Interface BookInterface.
 *
 * The Book implementation contract.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
interface BookInterface {
  /**
  * Gets the open on action.
  *
  * @return str
  */
  public function open();

 /**
  * Gets the next page turn action.
  *
  * @return str
  */
  public function turnPage();
}
