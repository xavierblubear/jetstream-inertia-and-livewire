<?php

namespace Modules\Home\Infrastructure\Livewire;

use Livewire\Component;
use Modules\Inventory\Application\Services\BrandService;

class HomeComponent extends Component
{
    public $mostSearchedBrands;

    public function mount(BrandService $brandService)
    {
        $brands = $brandService->getMostSearchedBrands();
        $this->mostSearchedBrands = $this->toArrays($brands);
    }

    public function render()
    {
        return view('website.pages.home');
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
