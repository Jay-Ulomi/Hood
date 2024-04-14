<?php

use App\Http\Controllers\BodyServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EngineController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\NearMeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpareController;
use App\Http\Controllers\WashController;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/', [HomeController::class,'fetchData'])->name('car.fetch_data');

Route::get('/All-Car',[CarController::class, 'fetchData'])->name('cars.all');

Route::get('/All-Spare',[SpareController::class, 'fetchData'])->name('spare.all');

Route::get('/Feed',[FeedController::class, 'fetchData'])->name('feed');

Route::get('/Shop-Car/{id}',[CarController::class,'Shop'])->name('Shop-Car');

Route::get('/Shop-Spare/{id}',[SpareController::class,'Shop'])->name('Shop-Spare');

Route::get('/Near-Me',[NearMeController::class,'nearBy'])->name('Near-Me');

Route::get('/location/{id}',[NearMeController::class, 'location'])->name('location');

Route::get('/Mechanic',[MechanicController::class,'getMechanic'])->name('mechanic');

Route::get('/Show-Mechanic',[MechanicController::class, 'showMechanic'])->name('Show-Mechanic');

Route::get('/Service',[ServiceController::class, 'service'])->name('Service');

Route::get('/Engine',[EngineController::class, 'engine'])->name('Engine');

Route::get('/Body-Service',[BodyServiceController::class, 'bodyService'])->name('Body-Service');

Route::get('/Wash',[WashController::class, 'wash'])->name('Wash');
