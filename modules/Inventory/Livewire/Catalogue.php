<?php

namespace Modules\Inventory\Livewire;

use Livewire\Component;
use Modules\Inventory\Repositories\Eloquent\Criteria\CarByBrands;
use Modules\Inventory\Repositories\Eloquent\Criteria\CarByTransmissions;
use Modules\Inventory\Services\BrandService;
use Modules\Inventory\Services\CarService;

class Catalogue extends Component
{
    public $cars;

    public $transmissions = ['manual', 'automatica'];
    public $selectedTransmissions = [];

    public $brands;
    public $selectedBrandsIds = [];

    public function mount(CarService $carService, BrandService $brandService)
    {
        $this->cars = $carService->repository()->all();
        $this->brands = $brandService->repository()->all();
    }

    public function render()
    {
        return view('website.pages.catalogue');
    }

    public function filter(CarService $carService)
    {
        $criteria = [];
        if (count($this->selectedTransmissions) > 0)
        {
            array_push($criteria, new CarByTransmissions($this->selectedTransmissions));
        }

        if (count($this->selectedBrandsIds) > 0)
        { 
            array_push($criteria, new CarByBrands($this->selectedBrandsIds));
        }

        $this->cars = $carService->filterByCriteria($criteria);
    }

    public function debug()
    {
        dd($this->selectedBrandsIds);
    }
}