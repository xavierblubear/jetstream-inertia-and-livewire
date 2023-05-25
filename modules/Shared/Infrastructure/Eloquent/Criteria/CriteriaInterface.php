<?php

namespace Modules\Shared\Infrastructure\Eloquent\Criteria;

interface CriteriaInterface
{
    /**
     * Perform criteria operations 
     *
     * @param Criterion[] ...$criteria
     * @return RepositoryAbstract
     */
    public function withCriteria(...$criteria);
}
