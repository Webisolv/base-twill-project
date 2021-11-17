<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExampleLivewireComponent extends Component
{
    public $count = 0;

    public function incrementCount()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.example-livewire-component');
    }
}
