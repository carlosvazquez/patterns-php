<?php
namespace App;

use App\Contracts\Bookinterface;

/**
 * The Person class
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 *
 */
class Person
{

  /**
  * Gets the actions for book made by human.
  *
  * @return str
  */
  public function read(Bookinterface $book)
  {
    $book->open();
    $book->turnPage();
  }
}
