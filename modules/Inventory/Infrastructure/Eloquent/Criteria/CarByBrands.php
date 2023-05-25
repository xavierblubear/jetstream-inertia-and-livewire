<?php

namespace Modules\Inventory\Infrastructure\Eloquent\Criteria;

use Modules\Shared\Infrastructure\Eloquent\Criteria\CriterionInterface;

class CarByBrands implements CriterionInterface
{
  protected $brandsIds;

  public function __construct($brandsIds)
  {
    $this->brandsIds = $brandsIds;
  }

  public function apply($entity)
  {
    $brandsIds = array_map('intval', $this->brandsIds);
    return $entity->whereIn('brand_id', $brandsIds);
  }
}