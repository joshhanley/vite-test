<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sample extends Component
{
    protected $listeners = [
        'echo:test,SomeEvent' => 'someEvent',
    ];

    public $show = true;

    public $events = [];

    public function someEvent()
    {
        dump('some event fired!');
        // $this->events[] = $data;
    }

    public function render()
    {
        return view('livewire.sample');
    }
}
