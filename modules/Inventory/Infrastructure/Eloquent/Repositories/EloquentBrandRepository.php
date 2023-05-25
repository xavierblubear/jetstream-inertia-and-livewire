<?php

namespace Modules\Inventory\Infrastructure\Eloquent\Repositories;

use Modules\Inventory\Domain\Contracts\Repositories\BrandRepository;
use Modules\Inventory\Infrastructure\Eloquent\Models\Brand;
use Modules\Shared\Infrastructure\Eloquent\Repositories\EloquentRepositoryAbstract;

class EloquentBrandRepository extends EloquentRepositoryAbstract implements BrandRepository
{
  public function entity()
  {
    return Brand::class;
  }
}