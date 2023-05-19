<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventory\Livewire\Catalogue;

Route::get('/catalogue', Catalogue::class);
