<?php

use App\Http\Controllers\DeathRateController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PopulationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [DataController::class, 'index'])->name('index');
Route::get('/population', [DataController::class, 'getPopulationByYear'])->name('get-population-by-year');

Route::get('/guidelines', [PageController::class, 'guidelines'])->name('guidelines')->middleware('auth');
Route::get('/dashboard', [PageController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('auth');

Route::get('/upload', [PopulationController::class, 'show'])->name('upload-csv')->middleware('auth');
Route::post('/upload/population', [PopulationController::class, 'store'])->name('store-population-data')->middleware('auth');

Route::post('/upload/deaths', [DeathRateController::class, 'store'])->name('store-deaths-data')->middleware('auth');

Auth::routes();
