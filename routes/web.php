<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return redirect()->route('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

});
Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
