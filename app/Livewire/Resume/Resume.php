<?php

namespace App\Livewire\Resume;

use Livewire\Component;

class Resume extends Component
{
    public function render()
    {
        return view('livewire.pages.resume.index')->layout('layouts.main');
    }
}
