<?php

namespace App\Livewire\Education;

use Livewire\Component;

class Education extends Component
{
    public function render()
    {
        return view('livewire.pages.education.index')->layout('layouts.main');
    }
}
