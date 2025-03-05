<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 1;

    public $myNum = 10;

    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function incrementByNum($num){
        $this->count+=$num;
    }

    public function decrementByNum($num){
        $this->count-=$num;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
