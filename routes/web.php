<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\DeathRateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PopulationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [DataController::class, 'index'])->name('index');

Route::get('/guidelines', [DataController::class, 'show'])->name('guidelines')->middleware('auth');
Route::get('/dashboard', [PopulationController::class, 'show'])->name('dashboard')->middleware('auth');
Route::post('/upload/population', [PopulationController::class, 'store'])->name('store-population-data')->middleware('auth');
Route::post('/upload/deaths', [DeathRateController::class, 'store'])->name('store-deaths-data')->middleware('auth');

Auth::routes(['register' => false]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
