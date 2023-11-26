<?php

namespace App\Livewire;

use App\Models\Poll;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public array $options = ['First'];
    public array $rules = [
        'title' => 'required|min:3|max:255',
        'options' => 'required|array|min:1|max:10',
        'options.*' => 'required|min:1|max:255' // every option in the options array
    ];
    public array $messages = [
      'options.*' => "The option can't be empty"
    ];
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

    /**
     * @throws ValidationException
     */
    public function updated($propertyName)
    {  // real time validation
        $this->validateOnly($propertyName);
    }
    public function createPoll(): void{
        $this->validate();
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
