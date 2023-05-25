<?php

namespace Modules\Shared\Infrastructure\Eloquent\Criteria;

interface CriterionInterface
{
  public function apply($entity);
}