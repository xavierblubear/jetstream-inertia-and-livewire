<?php

namespace Modules\Home\Controllers\Cms;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }
}
