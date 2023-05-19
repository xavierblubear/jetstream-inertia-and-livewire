<?php

namespace Modules\Inventory\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Modules\Inventory\Repositories\Contracts\CarRepository;

class CarIndexController extends Controller
{
  protected $carRepository;

  public function __construct(CarRepository $carRepository)
  {
    $this->carRepository = $carRepository;
  }

  public function __invoke()
  {
    $cars = $this->carRepository->all();

    return Inertia::render('Carros', ['cars' => $cars]);
  }
}