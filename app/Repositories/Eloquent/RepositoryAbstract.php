<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Criteria\CriteriaInterface;
use App\Repositories\Exceptions\NoEntityDefined;
use Illuminate\Support\Arr;

abstract class RepositoryAbstract implements RepositoryInterface, CriteriaInterface
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

  public function withCriteria(...$criteria)
  {
    $criteria = Arr::flatten($criteria);

    foreach ($criteria as $criterion)
    {
      $this->entity = $criterion->apply($this->entity);
    }

    return $this;
  }

  public function all()
  {
     return $this->entity->all();
  }
}