<?php

namespace Modules\Shared\Domain\Contracts\Repositories;

use Laravel\Scout\Builder;

interface SearchableRepositoryInterface
{
    /**
     * Realizar una busqueda mediante Scope
     *
     * @param string $search
     * @param function|null $callback
     * @return  $this
     */
    public function search($search = '', $callback = null);
    
    /**
     * Aplicar filtros a la busqueda de Meilisearch
     *
     * @param array...$criteria
     * @return $this
     */
    public function withCriteriaSearch(...$criteria);
}
