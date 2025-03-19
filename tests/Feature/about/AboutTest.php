<?php

use App\Livewire\About\About;
use App\Models\AboutData;
use App\Models\CvPdf;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

beforeEach(function () {
    $this->user = User::factory()->create(['is_admin' => 1]);
    $this->about = AboutData::factory()->create();
});

it('renders the about page successfully', function () {
    Livewire::test(About::class)
        ->assertOk()
        ->assertSee($this->about->about_text)
        ->assertSee($this->user->name)
        ->assertSee($this->user->email)
        ->assertSee($this->user->birhtday)
        ->assertSee($this->user->residence)
        ->assertSee($this->user->phone);
});

it('shows error toast when resume is not found', function () {
    Livewire::test(About::class)
        ->call('download')
        ->assertNoFileDownloaded();
});

it('downloads the resume when file exists', function () {
    Storage::fake('public');

    $fakeFilePath = 'resumes/test.pdf';
    Storage::disk('public')->put($fakeFilePath, 'Fake Resume Content');

    CvPdf::factory()->create([
        'file_path' => $fakeFilePath,
    ]);

    Livewire::test(About::class)
        ->call('download')
        ->assertFileDownloaded();
});
