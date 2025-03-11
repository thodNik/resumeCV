<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'livewire.pages.home.index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::view('dashboard', 'dashboard')->middleware('verified')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
});

