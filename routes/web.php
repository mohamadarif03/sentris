<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('dashboard-admin', 'admin.dashboard')->name('admin.dashboard');
Route::view('users', 'admin.users.index')->name('admin.users.index');
Route::view('settings', 'admin.settings.index')->name('admin.settings.index');
Route::view('logs', 'admin.logs.index')->name('admin.logs.index');

Route::view('dashboard-manajemen', 'manajemen.dashboard')->name('manajemen.dashboard');
Route::view('reports', 'manajemen.reports.index')->name('manajemen.reports.index');
Route::view('scenarios', 'manajemen.scenarios.index')->name('manajemen.scenarios.index');

Route::view('dashboard-validator', 'validator.dashboard')->name('validator.dashboard');
Route::view('history-validator', 'validator.history.index')->name('validator.history.index');

Route::view('dashboard-kontributor', 'kontributor.dashboard')->name('kontributor.dashboard');
Route::view('submit', 'kontributor.submit.index')->name('kontributor.submit.index');

Route::view('dashboard-keuangan', 'keuangan.dashboard')->name('keuangan.dashboard');
Route::view('history-keuangan', 'keuangan.history.index')->name('keuangan.history.index');

Route::view('dashboard-auditor', 'auditor.dashboard')->name('auditor.dashboard');
