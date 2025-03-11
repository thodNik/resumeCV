<?php

namespace App\Livewire\Home;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Home extends Component
{
    public function render(): Factory|Application|View
    {
        return view('livewire.pages.home.index');
    }
}
