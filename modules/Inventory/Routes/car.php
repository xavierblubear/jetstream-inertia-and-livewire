<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Modules\Inventory\Controllers\CarIndexController;
use Modules\Inventory\Livewire\Catalogue;

Route::get('/comprar', Catalogue::class);

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
])->group(function () {
  Route::get('/carros', CarIndexController::class)->name('carros');
});
