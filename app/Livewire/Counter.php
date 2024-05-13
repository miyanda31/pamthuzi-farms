<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function handleClick()
    {
        dump('hello world');
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
