<?php

namespace App\Http\Livewire\Main\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Navigation extends Component
{
    public $theme = "light";
    public $currentRouteName;


    public function changeTheme()
    {
        if ($this->theme === 'dark') {
            $this->theme = 'light';
        } else {
            $this->theme = 'dark';
        }
        session(['theme' => $this->theme]);

        $this->emit('themeChanged', $this->theme);
    }

    public function mount()
    {
        // * During the initial page load, Livewire uses your route.
        // * However, all subsequent AJAX requests are sent to an internal Livewire route which is 'livewire.message'.
        $this->currentRouteName = Route::currentRouteName();
        $this->theme = session('theme', 'light');
       
        $this->emit('themeChanged', $this->theme);

    }

    public function render()
    {
        return view('livewire.main.components.navigation');
    }
}
