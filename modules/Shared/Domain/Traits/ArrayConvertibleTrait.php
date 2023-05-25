<?php

namespace Modules\Shared\Domain\Traits;

trait ArrayConvertibleTrait
{
    /**
     * Convert entity into plain php array
     *
     * @return array
     */
    public function toArray(): array
    {
        $data = get_object_vars($this);

        foreach ($data as &$value) {
            if (is_object($value) && method_exists($value, 'toArray')) {
                $value = $value->toArray();
            }
        }

        return $data;
    }
}