<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    public function render()
    {
        return view('website.pages.counter');
    }

    public function add()
    {
        $this->counter++;
    }

    public function subtract()
    {
        $this->counter--;
    }
}
