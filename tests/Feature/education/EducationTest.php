<?php

use App\Livewire\Education\Education;
use App\Models\EducationData;
use Livewire\Livewire;

it('renders the education page successfully', function () {
    $education_data = EducationData::factory()->create();

    Livewire::test(Education::class)
        ->assertOk()
        ->assertSee($education_data->role)
        ->assertSee($education_data->company)
        ->assertSee($education_data->description)
        ->assertSee($education_data->from)
        ->assertSee($education_data->to);
});
