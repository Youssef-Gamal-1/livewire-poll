<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public array $options = ['First'];
    public function render()
    {
        return view('livewire.create-poll');
    }
    public function addOption(): void{
        $this->options[] = '';
    }
    public function removeOption(int $i): void{
        unset($this->options[$i]);
        $this->options = array_values($this->options);
    }
//    public function mount(){
//      for initializing properties if you have a lot of logic to put
//      it will called once
//    }
}
