<?php
namespace App;

use App\eReaderInterface;

/**
 * The Kindle class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class Kindle implements eReaderInterface {
  /**
  * Gets the actions for reader made by human.
  *
  * @return str
  */

  public function turnOn()
  {
    var_dump('turn the kindle on');
  }

  /**
  * Gets the actions for reader made by human.
  *
  * @return str
  */
  public function pressNextButton()
  {
    var_dump('Press next button on the kindle');
  }

}