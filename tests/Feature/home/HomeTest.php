<?php

use App\Livewire\Home\Home;
use function Pest\Laravel\get;

it('can render the home page successfully', function () {
    get(route('home'))->assertSeeLivewire(Home::class);
});
