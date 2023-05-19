<?php

namespace Modules\Inventory\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class TransmissionFilter implements CriterionInterface
{
  protected $transmission;

  public function __construct($transmission)
  {
    $this->transmission = $transmission;
  }

  public function apply($entity)
  {
    return $entity->where('transmission', $this->transmission);
  }
}