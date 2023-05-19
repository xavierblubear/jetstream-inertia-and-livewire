<?php

namespace Modules\Inventory\Livewire;

use Livewire\Component;
use Modules\Inventory\Repositories\Contracts\CarRepository;
use Modules\Inventory\Repositories\Eloquent\Criteria\TransmissionFilter;

class Catalogue extends Component
{
    public $cars;

    public $carTransmissions = ['manual', 'automatica'];
    public $transmission;

    public function mount(CarRepository $carRepository)
    {
        $this->showAll($carRepository);
    }

    public function render()
    {
        return view('website.pages.catalogue');
    }

    public function filterTransmission(CarRepository $carRepository, $transmission)
    {
        if ($this->transmission == $transmission) {
            $this->transmission = null;
            $this->showAll($carRepository);
            return;
        }

        $this->transmission = $transmission;
        $this->cars = $carRepository->withCriteria([
            new TransmissionFilter($this->transmission)
        ])->get();
    }

    public function showAll(CarRepository $carRepository)
    {
        $this->cars = $this->cars = $carRepository->all();
    }

    public function debug()
    {
        dd($this->cars);
    }
}