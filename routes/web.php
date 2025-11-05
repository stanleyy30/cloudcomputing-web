<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FormController::class, 'create'])->name('form.create');
Route::post('/form', [FormController::class, 'store'])->name('form.store');