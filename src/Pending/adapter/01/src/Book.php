<?php
namespace App;

use App\Contracts\BookInterface;

/**
 * The Book class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class Book implements BookInterface
{
  /**
  * Gets the book open it.
  *
  * @return str
  */
  public function open()
  {
    var_dump('opening the book');
  }

  /**
  * Gets the turning page action.
  *
  * @return str
  */
  public function turnPage()
  {
    var_dump('turning the page');
  }

}
