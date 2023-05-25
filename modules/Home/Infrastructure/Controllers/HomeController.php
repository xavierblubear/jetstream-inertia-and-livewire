<?php

namespace Modules\Home\Infrastructure\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }
}