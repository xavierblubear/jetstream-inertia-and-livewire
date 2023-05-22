<?php

namespace App\Repositories\Criteria;

use App\Repositories\Eloquent\RepositoryAbstract;

interface CriteriaInterface
{
    /**
     * Undocumented function
     *
     * @param [type] ...$criteria
     * @return RepositoryAbstract
     */
  public function withCriteria(...$criteria);
}
