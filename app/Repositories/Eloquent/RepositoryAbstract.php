<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Exceptions\NoEntityDefined;

abstract class RepositoryAbstract implements RepositoryInterface
{
  protected $entity;

  public function __construct()
  {
    $this->entity = $this->resolveEntity();
  }

  protected function resolveEntity()
  {
    if (!method_exists($this, 'entity'))
    {
      throw new NoEntityDefined();
    }

    return app()->make($this->entity());
  }

  public function all()
  {
     return $this->entity->all();
  }
}