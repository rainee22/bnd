<?php

namespace App\Http\Livewire\Main\Components;

use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        return view('livewire.main.components.services')->extends('layouts.app');
    }
}
