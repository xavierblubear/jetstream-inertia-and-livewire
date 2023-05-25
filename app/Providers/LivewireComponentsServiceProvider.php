<?php

namespace App\Providers;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use Modules\Home\Infrastructure\Livewire\HomeComponent;

class LivewireComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('home-component', HomeComponent::class);
    }
}
