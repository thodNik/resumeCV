<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home.index')->layout('layouts.main');
    }
}
