<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Inventory\Infrastructure\Eloquent\Models\Brand;

class BrandSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory()->create(['name' => 'Toyota', 'slug' => 'toyota']);
        Brand::factory()->create(['name' => 'Chevrolet', 'slug' => 'chevrolet']);
        Brand::factory()->create(['name' => 'Kía', 'slug' => 'kia']);
        Brand::factory()->create(['name' => 'Suzuki', 'slug' => 'susuki']);
        Brand::factory()->create(['name' => 'Renault', 'slug' => 'renault']);
    }
}
