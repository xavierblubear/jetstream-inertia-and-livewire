<?php

namespace Modules\Inventory\Infrastructure\Eloquent\Repositories;

use Modules\Inventory\Domain\Contracts\Repositories\CarRepository;
use Modules\Inventory\Domain\Entities\CarFilters;
use Modules\Inventory\Infrastructure\Eloquent\Criteria\CarByBrands;
use Modules\Inventory\Infrastructure\Eloquent\Criteria\CarByTransmissions;
use Modules\Inventory\Infrastructure\Eloquent\Mappers\CarEntityMapper;
use Modules\Inventory\Infrastructure\Eloquent\Models\Car;
use Modules\Shared\Infrastructure\Eloquent\Repositories\EloquentSearchableRepositoryAbstract;

class EloquentCarRepository extends EloquentSearchableRepositoryAbstract implements CarRepository
{
    public function entity()
    {
        return Car::class;
    }

    public function mapper()
    {
        return CarEntityMapper::class;
    }

    public function filter(CarFilters $filters): array
    {
        
        $criteria = $this->getCriteria($filters);
        $repository = $this->withCriteria($criteria);
        return CarEntityMapper::toEntities($repository->entity->get());
    }

    public function searchAndFilter(CarFilters $filters, $search = ''): array
    {
        $criteria = $this->getCriteria($filters);
        $repository = $this->search($search)->withCriteriaSearch($criteria);
        return CarEntityMapper::toEntities($repository->scoutModel->get());
    }

    /**
     * Get the criteria of the filters
     *
     * @param CarFilters $filters
     * @return Criterion[]
     */
    private function getCriteria(CarFilters $filters): array
    {
        $criteria = [];
        if (count($filters->getTransmissions()) > 0) {
            array_push($criteria, new CarByTransmissions($filters->getTransmissions()));
        }

        if (count($filters->getBrandsIds()) > 0) {
            array_push($criteria, new CarByBrands($filters->getBrandsIds()));
        }
        
        return $criteria;
    }
}
