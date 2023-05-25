<?php

namespace Modules\Inventory\Domain\Contracts\Repositories;

use Modules\Shared\Domain\Contracts\Repositories\RepositoryInterface;
use Modules\Shared\Infrastructure\Eloquent\Criteria\CriteriaInterface;

interface BrandRepository extends RepositoryInterface, CriteriaInterface
{

} 