<?php

namespace Modules\Inventory\Infrastructure\Livewire;

use Livewire\Component;
use Modules\Inventory\Application\Services\{
    BrandService,
    CarService
};
use Modules\Inventory\Domain\Entities\CarFilters;

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
        $this->brands = $brandService->all();
    }

    public function render(CarService $carService)
    {
        $this->filter($carService);
        return view('website.pages.catalogue');
    }

    public function filter(CarService $carService)
    {
        $carFilters = $this->buildCarFilters();
        $cars = $carService->filterAndSearch($carFilters, $this->search);
        $this->cars = $this->toArrays($cars);
    }

    public function getFiltersProperty()
    {
        return collect($this->selectedTransmissions)->concat($this->selectedBrandsIds);
    }

    public function removeFilter($index)
    {
        array_splice($this->selectedTransmissions, $index, 1);
    }

    private function buildCarFilters()
    {
        return new CarFilters(
            $this->selectedTransmissions,
            $this->selectedBrandsIds
        );
    }

    private function toArrays($entities)
    {
        $data = [];
        foreach ($entities as $entity)
        {
            array_push($data, $entity->toArray());
        }
        return $data;
    }
}
