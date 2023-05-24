<?php

namespace Modules\Inventory\Repositories\Eloquent;

use Laravel\Scout\Builder;
use Illuminate\Support\Arr;
use Modules\Inventory\Models\Car;
use App\Repositories\Eloquent\RepositoryAbstract;
use Modules\Inventory\Repositories\Contracts\CarRepository;

class EloquentCarRepository extends RepositoryAbstract implements CarRepository
{
    public function entity()
    {
        return Car::class;
    }
    
    /**
     * Realizar una busqueda mediante Scout.
     *
     * @param string $search
     * @param function|null $callback
     * @return $this
     */
    public function search($search = '', $callback = null)
    {
        $this->scoutModel = $this->entity::search($search, $callback);
        return $this;
    }

    /**
     * Retornar una instancia de Scout con los filtros aplicados.
     *
     * @param array ...$criteria
     * @return Builder
     */
    public function withCriteriaSearch(...$criteria): Builder
    {
        $criteria = Arr::flatten($criteria);

        foreach ($criteria as $criterion) {
            $this->scoutModel = $criterion->apply($this->scoutModel);
        }

        return $this->scoutModel;
    }
}
