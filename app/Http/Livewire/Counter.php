<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    // public $buttonAdd = 'add';
    // public $buttonSub = 'sub';
    // public $eventData;
    public $counter = 1;

    public $cars = array(
        [
          'name' => 'Car 1',
        ],
        [
          'name' => 'Car 2',
        ],
      );

    protected $listeners = ['click' => 'clickButton'];

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

    // public function clickButton($data)
    // {
    //     $this->eventData = $data;
    // }
}
