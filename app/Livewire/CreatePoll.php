<?php

namespace App\Livewire;

use App\Models\Poll;
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
    public function createPoll(): void{
//        $poll = Poll::create([
//            'title' => $this->title
//        ]);
//        foreach($this->options as $optionName){
//            $poll->options()->create(['name' => $optionName]);
//        }
        Poll::create([
            'title' => $this->title
        ])->options()->createMany(  // createMany accepts a collection of values
            collect($this->options)
                ->map(fn($option) => ['name' => $option]) // mapping every option to a value
                ->all()  // Getting the row array
        );
        $this->reset(['title','options']);
    }
//    public function mount(){
//      for initializing properties if you have a lot of logic to put
//      it will called once
//    }
}
