<?php

namespace Modules\Inventory\Repositories\Eloquent;

use App\Repositories\Eloquent\RepositoryAbstract;
use Modules\Inventory\Models\Car;
use Modules\Inventory\Repositories\Contracts\CarRepository;

class EloquentCarRepository extends RepositoryAbstract implements CarRepository
{
  public function entity()
  {
    return Car::class;
  }
}