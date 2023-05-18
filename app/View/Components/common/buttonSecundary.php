<?php

namespace App\View\Components\common;


use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class buttonSecundary extends Component
{
    public string $type;
    /**
     * Create a new component instance.
     */
    public function __construct($type)
    {
        //
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.common.button-secundary');
    }
}
