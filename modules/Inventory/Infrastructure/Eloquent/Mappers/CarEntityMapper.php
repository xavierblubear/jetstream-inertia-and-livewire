<?php

namespace Modules\Inventory\Infrastructure\Eloquent\Mappers;

use Illuminate\Database\Eloquent\Collection;
use Modules\Inventory\Domain\Entities\BrandEntity;
use Modules\Inventory\Domain\Entities\CarEntity;
use Modules\Inventory\Infrastructure\Eloquent\Models\Car;

class CarEntityMapper
{
    /**
     * Maps an Eloquent Car Model to a CarEntity object.
     *
     * @param Car $car
     * @return CarEntity
     */
    public static function toCarEntity(Car $car): CarEntity {
        $brandEntity = new BrandEntity($car->brand_id, $car->brand->name);

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
    public static function toCarEntities(Collection $cars): array {
        $carEntities = [];
        
        foreach ($cars as $car) {
            $carEntities[] = self::toCarEntity($car);
        }
        
        return $carEntities;
    }
}
