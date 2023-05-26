<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Inventory\Application\Services\CarService;
use Modules\Inventory\Infrastructure\Eloquent\Models\{
    Car,
    Brand
};
use Tests\TestCase;

class CarTest extends TestCase
{
    use RefreshDatabase;

    protected CarService $carService;

    public function setUp(): void
    {
        parent::setUp();
        $this->carService = $this->app->make('Modules\Inventory\Application\Services\CarService');
    }

    /**
     * A basic feature test example.
     */
    public function test_get_all_cars(): void
    {
        Car::factory()->count(10)->create([
            'brand_id' => Brand::factory()->create()->id
        ]);
        $cars = $this->carService->all();

        $this->assertCount(10, $cars);
    }
}
