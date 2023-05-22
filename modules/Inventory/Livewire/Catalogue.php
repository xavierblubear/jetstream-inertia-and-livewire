<?php

namespace Modules\Inventory\Livewire;

use Livewire\Component;
use Modules\Inventory\Models\Car;
use Modules\Inventory\Services\CarService;
use Modules\Inventory\Services\BrandService;
use Modules\Inventory\Repositories\Eloquent\Criteria\CarByBrands;
use Modules\Inventory\Repositories\Eloquent\Criteria\CarByTransmissions;

class Catalogue extends Component
{
    public $cars;
    public $queryString = [
        'selectedTransmissions' => ['as' => 'trasmision'],
        'selectedBrandsIds' => ['as' => 'marca'],
    ];
    public $transmissions = ['manual', 'automatica'];
    public $selectedTransmissions = [];

    public $brands;
    public $selectedBrandsIds = [];
    public $search = '';

    public function mount(BrandService $brandService)
    {
        // $this->cars = $carService->repository()->all();
        $this->brands = $brandService->repository()->all();
    }

    public function render(CarService $carService)
    {
        $this->filter($carService);
        return view('website.pages.catalogue');
    }

    public function filter(CarService $carService)
    {
        $criteria = [];
        if (count($this->selectedTransmissions) > 0) {
            array_push($criteria, new CarByTransmissions($this->selectedTransmissions));
        }

        if (count($this->selectedBrandsIds) > 0) {
            array_push($criteria, new CarByBrands($this->selectedBrandsIds));
        }

        $response = ($carService->filterByCriteriaAndSearch($criteria, $this->search));
        $this->cars = $response;
    }
    public function getFiltersProperty()
    {
        return collect($this->selectedTransmissions)->concat($this->selectedBrandsIds);
    }
    public function debug()
    {
        dd($this->selectedBrandsIds);
    }
    public function removeFilter($index)
    {
        array_splice($this->selectedTransmissions, $index, 1);
    }
}
