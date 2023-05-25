<?php

namespace Modules\Shared\Infrastructure\Eloquent\Repositories;

use Illuminate\Support\Arr;
use Modules\Shared\Domain\Contracts\Repositories\RepositoryInterface;
use Modules\Shared\Infrastructure\Eloquent\Criteria\CriteriaInterface;
use Modules\Shared\Infrastructure\Eloquent\Exceptions\NoEntityDefined;

abstract class EloquentRepositoryAbstract implements RepositoryInterface, CriteriaInterface
{
    protected $entity;

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

    public function all()
    {
        return $this->entity->all();
    }
}
