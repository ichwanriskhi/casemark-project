<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::view('dashboard', 'dashboard')->name('dashboard');
Route::view('case-mark', 'case-mark')->name('case-mark');
Route::view('history', 'history')->name('history');
Route::view('upload', 'upload')->name('upload');
Route::view('list-cs', 'list-cs')->name('list-cs');
Route::view('list-cs-detail', 'list-cs-detail')->name('list-cs-detail');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';