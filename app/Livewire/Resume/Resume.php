<?php

namespace App\Livewire\Resume;

use App\Models\ResumeData;
use Livewire\Component;

class Resume extends Component
{
    public function render()
    {
        return view('livewire.pages.resume.index', [
            'experiences' => ResumeData::query()->orderBy('created_at', 'desc')->get(),
        ])->layout('layouts.main');
    }
}
