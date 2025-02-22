<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/name', [NameController::class, 'index'])->name('name');

Route::post('/store-name', [NameController::class, 'store'])->name('store.name');
Route::get('/names', [NameController::class, 'index'])->name('names.list');