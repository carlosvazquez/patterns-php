<?php
namespace App;

use App\eReaderInterface;

/**
 * The eReaderAdapter class.
 *
 * @author Carlos Vazquez <carlosvazquez@outlook.com>
 */
class eReaderAdapter implements BookInterface {
  
  /**
   * The BookInterface instance.
   *
   * @var \App\eReaderInterface
   */
  private $eReader;

  /**
   * The eReader interface instance.
   *
   * @param \App\eReaderInterface $eReader
   *
   * @return void
   */
  public function __construct(eReaderInterface $eReader)
  {
    $this->eReader = $eReader;
  }

 /**
  * Gets the press next button action.
  *
  * @return str
  */
  public function open()
  {
    return $this->eReader->turnOn();
  }

 /**
  * Gets the next page turning action.
  *
  * @return str
  */
  public function turnPage()
  {
    return $this->eReader->pressNextButton();
  }

}