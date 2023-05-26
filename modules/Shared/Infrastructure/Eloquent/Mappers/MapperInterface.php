<?php

namespace Modules\Shared\Infrastructure\Eloquent\Mappers;

interface MapperInterface
{
    public static function toEntity($model);
    public static function toEntities($models);
}