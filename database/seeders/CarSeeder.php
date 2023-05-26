<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Modules\Inventory\Infrastructure\Eloquent\Models\Car;

class CarSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::factory()->count(20)->create();
    }
}
