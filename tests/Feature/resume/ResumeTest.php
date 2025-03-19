<?php

use App\Livewire\Resume\Resume;
use App\Models\ResumeData;
use Livewire\Livewire;

it('renders the resume page successfully', function () {
    $resume_data = ResumeData::factory()->create();

    Livewire::test(Resume::class)
        ->assertOk()
        ->assertSee($resume_data->role)
        ->assertSee($resume_data->company)
        ->assertSee($resume_data->description)
        ->assertSee($resume_data->from)
        ->assertSee($resume_data->to);
});
