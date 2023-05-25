<?php

namespace Modules\Inventory\Domain\Contracts\Repositories;

use Modules\Inventory\Domain\Entities\CarFilters;
use Modules\Shared\Domain\Contracts\Repositories\RepositoryInterface;
use Modules\Shared\Domain\Contracts\Repositories\SearchableRepositoryInterface;
use Modules\Shared\Infrastructure\Eloquent\Criteria\CriteriaInterface;

interface CarRepository extends RepositoryInterface, SearchableRepositoryInterface, CriteriaInterface
{
    /**
     * Get an array of filtered car entities
     *
     * @param CarFilters $filters
     * @return CarEntity[]
     */
    public function filter(CarFilters $filters): array;

    /**
     * Search for an array of cars and apply filters
     *
     * @param CarFilters $filters
     * @param string $search
     * @return array
     */
    public function searchAndFilter(CarFilters $filters, $search = ''): array;
}
