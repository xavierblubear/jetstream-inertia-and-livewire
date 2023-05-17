<?php

namespace App\Http\Livewire\Common;

use Livewire\Component;

class Primarybutton extends Component
{
    public $textButton;

    public function clickEvent()
    {
        $this->emit('click', $eventData);
    }

    public function render()
    {
        return view('livewire.common.primarybutton');
    }
}
