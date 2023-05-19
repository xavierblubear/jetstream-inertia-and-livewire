<?php

namespace App\Repositories\Exceptions;

use Exception;

class NoEntityDefined extends Exception
{
  protected $message;

  public function __construct($message = 'No entity defined')
  {
    $this->message = $message;
  }
}