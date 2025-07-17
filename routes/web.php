<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', Dashboard::class)->name('dashboard');

// });
