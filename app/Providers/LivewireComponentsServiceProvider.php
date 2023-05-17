<?php

namespace App\Providers;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class LivewireComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('home-component', \Modules\Home\Livewire\HomeComponent::class);
    }
}
