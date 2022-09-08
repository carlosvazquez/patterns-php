<?php
namespace App;

use App\Contracts\eReaderInterface;

/**
 * The Nook class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class Nook implements eReaderInterface
{
  /**
  * Gets the actions for nook made by human.
  *
  * @return str
  */
  public function turnOn()
  {
    var_dump('turn the Nook on');
  }

  public function pressNextButton()
  {
    var_dump('Press next button on the nook');
  }
}
