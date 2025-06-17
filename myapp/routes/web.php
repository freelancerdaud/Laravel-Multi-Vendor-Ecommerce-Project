<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified', 'rolemanager:customer'])->name('dashboard');

    Route::get('/admin', function () {
        return view('admin');
    })->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin');

    Route::get('/vendor', function () {
        return view('vendor');
    })->middleware(['auth', 'verified', 'rolemanager:vendor'])->name('vendor');


});
