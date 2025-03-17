<?php

use App\Livewire\About\About;
use App\Livewire\Education\Education;
use App\Livewire\Home\Home;
use App\Livewire\Resume\Resume;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/resume', Resume::class)->name('resume');
Route::get('/education', Education::class)->name('education');

