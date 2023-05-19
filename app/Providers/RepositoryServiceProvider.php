<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Inventory\Repositories\Contracts\CarRepository;
use Modules\Inventory\Repositories\Eloquent\EloquentCarRepository;

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
    }
}
