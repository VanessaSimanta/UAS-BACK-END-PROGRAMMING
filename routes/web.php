<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\FormController;


Route::controller(dataController::class)->group(function () {
    Route::get('/', 'index');
});

Route::post('/', [FormController::class, 'addForm'])->name('form.message');
