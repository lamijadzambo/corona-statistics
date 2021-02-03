<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\DeathsController;
use App\Http\Controllers\PopulationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DataController::class, 'index'])->name('index');
Route::get('/guidelines', [DataController::class, 'show'])->name('guidelines');

Route::get('/upload', [PopulationController::class, 'show'])->name('upload-excel');
Route::post('/upload/population', [PopulationController::class, 'store'])->name('store-population-data');

Route::post('/upload/deaths', [DeathsController::class, 'store'])->name('store-deaths-data');



Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
