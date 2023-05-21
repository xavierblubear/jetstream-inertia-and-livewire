<?php

namespace Modules\Inventory\Services;

use Modules\Inventory\Repositories\Contracts\BrandRepository;

class BrandService
{
  protected $brandRepository;

  public function __construct(BrandRepository $brandRepository)
  {
    $this->brandRepository = $brandRepository;
  }

  public function getMostSearchedBrands()
  {
    return $this->brandRepository->all();
  }

  public function repository()
  {
    return $this->brandRepository;
  }
}