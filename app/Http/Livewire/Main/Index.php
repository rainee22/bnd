<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;

class Index extends Component
{
    public $bodyLoaded = false;

    public function render()
    {
        return view('livewire.main.index');
    }
}
