<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventory\Infrastructure\Controllers\CarIndexController;
use Modules\Inventory\Infrastructure\Livewire\Catalogue;

Route::get('/comprar', Catalogue::class);

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
])->group(function () {
  Route::get('/carros', CarIndexController::class)->name('carros');
});
