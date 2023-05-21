<?php

namespace Modules\Inventory\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class CarWithBrand implements CriterionInterface
{
  public function apply($entity)
  {
    return $entity->with('brand');
  }
}