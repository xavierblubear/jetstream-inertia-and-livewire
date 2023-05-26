<?php

namespace Modules\Inventory\Infrastructure\Eloquent\Mappers;

use Illuminate\Database\Eloquent\Collection;
use Modules\Inventory\Domain\Entities\BrandEntity;
use Modules\Inventory\Infrastructure\Eloquent\Models\Brand;
use Modules\Shared\Infrastructure\Eloquent\Mappers\MapperInterface;

class BrandEntityMapper implements MapperInterface
{
    /**
     * Maps an Eloquent Brand Model to a BrandEntity object.
     *
     * @param Brand $brand
     * @return BrandEntity
     */
    public static function toEntity($brand): BrandEntity {
        return new BrandEntity(
            $brand->id,
            $brand->name,
            $brand->slug
        );
    }

    /**
     * Maps a Collection of Eloquent Brand Models to an array of BrandEntity objects.
     *
     * @param Collection $brands
     * @return BrandEntity[]
     */
    public static function toEntities($brands): array {
        $brandEntities = [];

        foreach ($brands as $brand) {
            $brandEntities[] = self::toEntity($brand);
        }

        return $brandEntities;
    }
}
