<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('users', 'admin.users.index')->name('users.index');
    Route::view('settings', 'admin.settings.index')->name('settings.index');
    Route::view('logs', 'admin.logs.index')->name('logs.index');
});

Route::prefix('manajemen')->name('manajemen.')->group(function () {
    Route::view('dashboard', 'manajemen.dashboard')->name('dashboard');
    Route::view('reports', 'manajemen.reports.index')->name('reports.index');
    Route::view('scenarios', 'manajemen.scenarios.index')->name('scenarios.index');
});

Route::prefix('validator')->name('validator.')->group(function () {
    Route::view('dashboard', 'validator.dashboard')->name('dashboard');
    Route::view('history', 'validator.history.index')->name('history.index');
});     

Route::prefix('kontributor')->name('kontributor.')->group(function () {
    Route::view('dashboard', 'kontributor.dashboard')->name('dashboard');
    Route::view('submit', 'kontributor.submit.index')->name('submit.index');
});

Route::prefix('keuangan')->name('keuangan.')->group(function () {
    Route::view('dashboard', 'keuangan.dashboard')->name('dashboard');
    Route::view('history', 'keuangan.history.index')->name('history.index');
});
Route::prefix('auditor')->name('auditor.')->group(function () {
    Route::view('dashboard', 'auditor.dashboard')->name('dashboard');
});
