<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewHome extends Component
{

    public $counter = 1;

  
    //public $listeners = ['buttonClicked'];
    protected $listeners = ['add', 'remove'];

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
