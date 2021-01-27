<?php

use App\Http\Controllers\PopulationController;
use Illuminate\Support\Facades\Route;


Route::get('/index', [PopulationController::class, 'index'])->name('index');


Route::get('/upload', [PopulationController::class, 'show'])->name('upload-excel');
Route::post('/upload/store', [PopulationController::class, 'store'])->name('store-excel');

