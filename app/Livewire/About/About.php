<?php

namespace App\Livewire\About;

use App\Models\AboutData;
use App\Models\User;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $about_data = AboutData::query()->whereNotNull('about_text')->first();

        return view('livewire.pages.about.index', [
            'about_text' => $about_data?->about_text,
            'user' => User::query()->firstWhere('is_admin', 1)
        ])->layout('layouts.main');
    }
}
