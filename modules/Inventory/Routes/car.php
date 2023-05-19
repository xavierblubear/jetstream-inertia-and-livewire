<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventory\Controllers\CarIndexController;

Route::get('/cars', CarIndexController::class);
