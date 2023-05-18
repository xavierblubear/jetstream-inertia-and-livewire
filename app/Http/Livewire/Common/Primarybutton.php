<?php

namespace App\Http\Livewire\Common;

use Livewire\Component;

class Primarybutton extends Component
{
    public $textButton;
    public $eventName;

    public function mount($eventName)
    {
        $this->eventName = $eventName;
    }

    public function emitButtonClick()
    {
        $this->emit($this->eventName);
    }

    public function render()
    {
        return view('livewire.common.primarybutton');
    }
}
