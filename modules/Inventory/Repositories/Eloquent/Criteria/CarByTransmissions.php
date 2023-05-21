<?php

namespace Modules\Inventory\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class CarByTransmissions implements CriterionInterface
{
  protected $transmissions;

  public function __construct($transmissions)
  {
    $this->transmissions = $transmissions;
  }

  public function apply($entity)
  {
    $transmissions = array_map('strtoupper', $this->transmissions);
    return $entity->whereIn('transmission', $transmissions);
  }
}