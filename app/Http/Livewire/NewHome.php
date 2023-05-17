<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewHome extends Component
{

    public $buttonAdd = 'add';
    public $buttonSub = 'sub';
    public $eventData;
    public $counter = 1;

    protected $listeners = ['click' => 'clickButton'];

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

    public function clickButton($data)
    {
        $this->eventData = $data;
    }
}
