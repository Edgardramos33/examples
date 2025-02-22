<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::post('/store-name', [NameController::class, 'store'])->name('store.name');
Route::get('/name', [NameController::class, 'index'])->name('name');

Route::get('/edit/{id}', [NameController::class, 'edit'])->name('edit.name');
Route::put('/update/{id}', [NameController::class, 'update'])->name('update.name');

Route::delete('/delete/{id}', [NameController::class, 'destroy'])->name('delete.name');
