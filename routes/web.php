<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard');


