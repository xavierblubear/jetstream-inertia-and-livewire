<?php

namespace Modules\Inventory\Infrastructure\Eloquent\Criteria;

use Modules\Shared\Infrastructure\Eloquent\Criteria\CriterionInterface;

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