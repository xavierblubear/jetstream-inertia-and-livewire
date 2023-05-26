<?php

namespace Modules\Inventory\Infrastructure\Eloquent\Mappers;

use Illuminate\Database\Eloquent\Collection;
use Modules\Inventory\Domain\Entities\BrandEntity;
use Modules\Inventory\Domain\Entities\CarEntity;
use Modules\Inventory\Infrastructure\Eloquent\Models\Car;
use Modules\Shared\Infrastructure\Eloquent\Mappers\MapperInterface;

class CarEntityMapper implements MapperInterface
{
    /**
     * Maps an Eloquent Car Model to a CarEntity object.
     *
     * @param Car $car
     * @return CarEntity
     */
    public static function toEntity($car): CarEntity {
        $brandEntity = new BrandEntity($car->brand_id, $car->brand->name,$car->brand->slug);

        return new CarEntity(
            $car->id,
            $car->name,
            $car->year,
            $car->kilometers,
            $car->transmission,
            $car->price,
            $brandEntity
        );
    }

    /**
     * Maps a Collection of Eloquent Car Models to an array of CarEntity objects.
     *
     * @param Collection $cars
     * @return CarEntity[]
     */
    public static function toEntities($cars): array {
        $carEntities = [];

        foreach ($cars as $car) {
            $carEntities[] = self::toEntity($car);
        }

        return $carEntities;
    }
}
