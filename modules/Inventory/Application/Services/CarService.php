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
     * Get an array of all the cars
     *
     * @return CarEntity[]
     */
    public function all(): array
    {
        return $this->carRepository->all();
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
