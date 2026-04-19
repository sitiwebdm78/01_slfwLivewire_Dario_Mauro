<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $value = 0;

    public $num = 7;

    public function increment()

    {
        $this->value++;
    }


     public function decrement()

    {
        $this->value--;
    }

        public function incrementByNum($num){
        $this->value+=$num;
    }
    
    public function decrementByNum($num){
        $this->value-=$num;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
