<?php

namespace Modules\Inventory\Services;

use Illuminate\Database\Eloquent\Collection;
use Modules\Inventory\Repositories\Contracts\CarRepository;

class CarService
{
    protected $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    public function filterByCriteria($criteria)
    {
        return $this->carRepository->withCriteria($criteria)->get();
    }
    /**
     * Obtener busqueda mediante Meilisearch con filtros aplicados
     *
     * @param  ...$criteria
     * @param string $search
     * @param mixed $callback
     * @return Collection
     */
    public function filterByCriteriaAndSearch($criteria, string $search = '', mixed $callback = null): Collection
    {
        return $this->carRepository->search($search, $callback)->withCriteriaSearch($criteria)->get();
    }
    public function repository()
    {
        return $this->carRepository;
    }
}
