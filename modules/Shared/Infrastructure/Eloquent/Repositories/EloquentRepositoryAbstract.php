<?php

namespace Modules\Shared\Infrastructure\Eloquent\Repositories;

use Illuminate\Support\Arr;
use Modules\Shared\Domain\Contracts\Repositories\RepositoryInterface;
use Modules\Shared\Infrastructure\Eloquent\Criteria\CriteriaInterface;
use Modules\Shared\Infrastructure\Eloquent\Exceptions\{
    NoEntityDefined,
    NoMapperDefined
};

abstract class EloquentRepositoryAbstract implements RepositoryInterface, CriteriaInterface
{
    protected $entity;
    protected $mapper;

    public function __construct()
    {
        $this->entity = $this->resolveEntity();
        $this->mapper = $this->resolveMapper();
    }

    protected function resolveEntity()
    {
        if (!method_exists($this, 'entity')) {
            throw new NoEntityDefined();
        }

        return app()->make($this->entity());
    }

    protected function resolveMapper()
    {
        if (!method_exists($this, 'mapper')) {
            throw new NoMapperDefined();
        }

        return app()->make($this->mapper());
    }

    public function all()
    {
        $models = $this->entity->all();
        return $this->mapper->toEntities($models);
    }

    /**
     * Filter models by any criteria given
     *
     * @param Criterion[] ...$criteria
     * @return EloquentRepositoryAbstract
     */
    public function withCriteria(...$criteria): EloquentRepositoryAbstract
    {
        $criteria = Arr::flatten($criteria);

        foreach ($criteria as $criterion) {
            $this->entity = $criterion->apply($this->entity);
        }

        return $this;
    }
}
