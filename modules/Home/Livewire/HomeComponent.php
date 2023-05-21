<?php

namespace Modules\Home\Livewire;

use Livewire\Component;
use Modules\Inventory\Services\BrandService;

class HomeComponent extends Component
{
    public $mostSearchedBrands;

    public function mount(BrandService $brandService)
    {
        $this->mostSearchedBrands = $brandService->getMostSearchedBrands();
    }

    public function render()
    {
        return view('website.pages.home');
    }
}
