<?php

namespace Modules\Shared\Domain\Contracts\Repositories;

interface SearchableRepositoryInterface
{
    /**
     * Perform a search trough Scope
     *
     * @param string $search
     * @param function|null $callback
     * @return  $this
     */
    public function search($search = '', $callback = null);
    
    /**
     * Apply filters to the Meilisearch search
     *
     * @param array...$criteria
     * @return $this
     */
    public function withCriteriaSearch(...$criteria);
}
