<?php

namespace Modules\Shared\Infrastructure\Eloquent\Repositories;

use Illuminate\Support\Arr;
use Modules\Shared\Domain\Contracts\Repositories\SearchableRepositoryInterface;

abstract class EloquentSearchableRepositoryAbstract extends EloquentRepositoryAbstract implements SearchableRepositoryInterface
{
    protected $scoutModel;

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
     * @param Criterion[] ...$criteria
     * @return EloquentSearchableRepositoryAbstract
     */
    public function withCriteriaSearch(...$criteria): EloquentSearchableRepositoryAbstract
    {
        $criteria = Arr::flatten($criteria);

        foreach ($criteria as $criterion) {
            $this->scoutModel = $criterion->apply($this->scoutModel);
        }

        return $this;
    }
}