<?php

namespace Modules\Inventory\Services;

use Modules\Inventory\Repositories\Contracts\CarRepository;
use Modules\Inventory\Repositories\Eloquent\Criteria\CarWithBrand;

class CarService
{
  protected $carRepository;

  public function __construct(CarRepository $carRepository)
  {
    $this->carRepository = $carRepository;
  }

  public function filterByCriteria($criteria)
  {
    return $this->carRepository
      ->withCriteria($criteria)
      ->get();
  }

  public function repository()
  {
    return $this->carRepository;
  }
}