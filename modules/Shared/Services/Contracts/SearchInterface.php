<?php

namespace Modules\Shared\Services\Contracts;

use Laravel\Scout\Builder;

interface SearchInterface
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
     * @return Builder
     */
    public function withCriteriaSearch(...$criteria): Builder;
}
