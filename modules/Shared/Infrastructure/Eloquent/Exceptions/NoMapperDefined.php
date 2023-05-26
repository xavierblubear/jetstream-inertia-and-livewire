<?php

namespace Modules\Shared\Infrastructure\Eloquent\Exceptions;

use Exception;

class NoMapperDefined extends Exception
{
  protected $message;

  public function __construct($message = 'No mapper defined')
  {
    $this->message = $message;
  }
}