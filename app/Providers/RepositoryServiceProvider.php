<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Inventory\Domain\Contracts\Repositories\{
    CarRepository,
    BrandRepository
};
use Modules\Inventory\Infrastructure\Eloquent\Repositories\{
    EloquentCarRepository,
    EloquentBrandRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(CarRepository::class, EloquentCarRepository::class);
        $this->app->bind(BrandRepository::class, EloquentBrandRepository::class);
    }
}
