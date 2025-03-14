<?php

namespace App\Livewire\Education;

use App\Models\EducationData;
use Livewire\Component;

class Education extends Component
{
    public function render()
    {
        return view('livewire.pages.education.index', [
            'educations' => EducationData::all(),
        ])->layout('layouts.main');
    }
}
