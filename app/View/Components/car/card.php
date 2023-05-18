<?php

namespace App\View\Components\car;


use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class buttonSecundary extends Component
{
    public array $car;
    /**
     * Create a new component instance.
     */
    public function __construct($car)
    {
        //
        $this->car = $car;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('website.components.car.card');
    }
}
