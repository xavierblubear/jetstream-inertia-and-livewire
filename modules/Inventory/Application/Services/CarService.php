<?php

namespace Modules\Inventory\Application\Services;

use Modules\Inventory\Domain\Contracts\Repositories\CarRepository;
use Modules\Inventory\Domain\Entities\CarFilters;

class CarService
{
    protected $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    /**
     * Get an array of filtered car entities
     *
     * @param CarFilters $filters
     * @return CarEntity[]
     */
    public function filter(CarFilters $filters): array
    {
        return $this->carRepository->filter($filters);
    }

    /**
     * Obtener busqueda mediante Meilisearch con filtros aplicados
     *
     * @param  ...$criteria
     * @param string $search
     * @param mixed $callback
     * @return CarEntity[]
     */
    // public function filterByCriteriaAndSearch($criteria, string $search = '', mixed $callback = null)
    // {
    //     $scoutRepository = $this->carRepository->search($search, $callback)->withCriteriaSearch($criteria);
    //     return $scoutRepository->get();
    // }

    /**
     * Search an array of cars and apply filters
     *
     * @param CarFilters $filters
     * @param string $search
     * @param mixed $callback
     * @return CarEntity[]
     */
    public function filterAndSearch(CarFilters $filters, string $search = '', mixed $callback = null): array
    {
        return $this->carRepository->searchAndFilter($filters, $search);
    }
}
