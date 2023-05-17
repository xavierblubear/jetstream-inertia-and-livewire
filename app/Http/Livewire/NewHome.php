<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewHome extends Component
{
    public $counter = 1;

    public function render()
    {
        return view('livewire.new-home');
    }

    public function add()
    {
        $this->counter++;
    }

    public function remove()
    {
        $this->counter--;
    }
}
