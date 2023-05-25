<?php

namespace Modules\Inventory\Application\Services;

use Modules\Inventory\Domain\Contracts\Repositories\BrandRepository;

class BrandService
{
  protected $brandRepository;

  public function __construct(BrandRepository $brandRepository)
  {
    $this->brandRepository = $brandRepository;
  }

  public function all()
  {
    return $this->brandRepository->all();
  }

  public function getMostSearchedBrands()
  {
    return $this->brandRepository->all();
  }
}