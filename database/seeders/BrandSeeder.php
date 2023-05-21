<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Inventory\Models\Brand;

class BrandSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Brand::factory()->create(['name' => 'Toyota']);
      Brand::factory()->create(['name' => 'Chevrolet']);
      Brand::factory()->create(['name' => 'Kía']);
      Brand::factory()->create(['name' => 'Suzuki']);
      Brand::factory()->create(['name' => 'Renault']);
    }
}