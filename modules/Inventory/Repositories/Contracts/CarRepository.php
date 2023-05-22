<?php

namespace Modules\Inventory\Repositories\Contracts;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Criteria\CriteriaInterface;
use Modules\Shared\Services\Contracts\SearchInterface;

interface CarRepository extends RepositoryInterface, CriteriaInterface, SearchInterface
{
}
