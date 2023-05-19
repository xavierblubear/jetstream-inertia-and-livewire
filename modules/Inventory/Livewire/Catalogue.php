<?php

namespace Modules\Inventory\Livewire;

use Livewire\Component;
use Modules\Inventory\Repositories\Contracts\CarRepository;
use Modules\Inventory\Repositories\Eloquent\Criteria\TransmissionFilter;

class Catalogue extends Component
{
    protected $carRepository;

    public $cars;

    public $transmission = 'manual';

    public function mount(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
        if (!isset($this->cars) || empty($this->cars))
        {
            $this->cars = $this->carRepository->withCriteria()->all();
        }
    }

    public function render()
    {
        return view('website.pages.catalogue');
    }

    public function showAll()
    {
        $this->cars = $this->carRepository->all();
    }

    public function debug()
    {
        dd($this->cars);
    }
}