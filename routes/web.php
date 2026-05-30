<?php

use Illuminate\Support\Facades\Route;

// general
Route::get('/', function () {
    return view('general.started');
});

Route::get('/login', function () {
    return redirect()->route('filament.admin.auth.login');
})->name('login');
