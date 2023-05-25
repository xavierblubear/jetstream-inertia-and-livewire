<?php

use Illuminate\Support\Facades\Route;
use Modules\Home\Infrastructure\Controllers\HomeController;
use Modules\Home\Infrastructure\Livewire\HomeComponent;

Route::prefix('admin')
    ->name('admin.')
    ->controller(HomeController::class)
    ->group(function () {
        Route::get('/home', 'index')->name('home.index')
            ->middleware([
                'auth:sanctum',
                config('jetstream.auth_session'),
                'verified',
            ]);
    });

Route::get('/', HomeComponent::class)->name('home.index');
