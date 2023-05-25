<?php

namespace Modules\Inventory\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Modules\Inventory\Domain\Contracts\Repositories\CarRepository;

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