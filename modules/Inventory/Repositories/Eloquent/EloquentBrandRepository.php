<?php

namespace Modules\Inventory\Repositories\Eloquent;

use App\Repositories\Eloquent\RepositoryAbstract;
use Modules\Inventory\Models\Brand;
use Modules\Inventory\Repositories\Contracts\BrandRepository;

class EloquentBrandRepository extends RepositoryAbstract implements BrandRepository
{
  public function entity()
  {
    return Brand::class;
  }
}