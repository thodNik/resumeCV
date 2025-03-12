<?php

namespace App\Livewire\About;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.pages.about.index')->layout('layouts.main');
    }
}
