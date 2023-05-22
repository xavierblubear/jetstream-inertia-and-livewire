<?php

namespace App\Repositories\Eloquent;

use Laravel\Scout\Builder;
use Illuminate\Support\Arr;
use App\Repositories\Criteria\CriteriaInterface;
use App\Repositories\Exceptions\NoEntityDefined;
use App\Repositories\Contracts\RepositoryInterface;

abstract class RepositoryAbstract implements RepositoryInterface, CriteriaInterface
{
    protected $entity;
    protected $scoutModel;

    public function __construct()
    {
        $this->entity = $this->resolveEntity();
    }

    protected function resolveEntity()
    {
        if (!method_exists($this, 'entity')) {
            throw new NoEntityDefined();
        }

        return app()->make($this->entity());
    }

    /**
     * Aplicar filtros a los modelos
     *
     * @param any ...$criteria
     * @return RepositoryAbstract
     */
    public function withCriteria(...$criteria)
    {
        $criteria = Arr::flatten($criteria);

        foreach ($criteria as $criterion) {
            $this->entity = $criterion->apply($this->entity);
        }

        return $this;
    }

    public function all()
    {
        return $this->entity->all();
    }

    public function get()
    {
        return $this->entity->get();
    }
}
