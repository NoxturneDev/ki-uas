<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SeasonController;

Route::middleware('user.auth')->group(function () {
  Route::get('/drivers', [DriverController::class, 'index']);
  Route::get('/teams', [TeamController::class, 'index']);
  Route::get('/cars', [CarController::class, 'index']);
  Route::get('/seasons', [SeasonController::class, 'index']);
});