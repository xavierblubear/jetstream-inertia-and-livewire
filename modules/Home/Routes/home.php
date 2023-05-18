<?php

use Illuminate\Support\Facades\Route;
use Modules\Home\Livewire\HomeComponent;
use Modules\Home\Controllers\Cms\HomeController;

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

Route::get('/home', HomeComponent::class)->name('home.index');
