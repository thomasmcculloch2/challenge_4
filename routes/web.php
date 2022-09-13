<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AirlineController;
use \App\Http\Controllers\FlightController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//-----------------------CITIES---------------------------------//
Route::get('/cities', [CityController::class, 'index']);

Route::delete('/cities/{id}', [CityController::class, 'remove']);

Route::get('cities/add_city', [CityController::class, 'create']);
Route::post('cities/add_city', [CityController::class, 'store']);

Route::get('cities/{id}/edit_city', [CityController::class, 'edit']);
Route::put('/cities/{id}', [CityController::class, 'update']);

//-----------------------AIRLINES--------------------------------//
Route::get('/airlines', [AirlineController::class, 'index']);

Route::delete('/airlines/{id}', [AirlineController::class, 'remove']);

Route::get('airlines/add_airline', [AirlineController::class, 'create']);
Route::post('airlines/add_airline', [AirlineController::class, 'store']);

Route::get('airlines/{id}/edit_airline', [AirlineController::class, 'edit']);
Route::put('/airlines/{id}', [AirlineController::class, 'update']);

//-----------------------FLIGHTS--------------------------------//
Route::get('/flights', [FlightController::class, 'index']);

Route::delete('/flights/{id}', [FlightController::class, 'remove']);

Route::get('/flights/{id}' , [FlightController::class, 'cities']);

Route::get('flights/add_flight', [FlightController::class, 'create']);
Route::post('flights/add_flight', [AirlineController::class, 'store']);

Route::get('flights/{id}/edit_flight', [AirlineController::class, 'edit']);
Route::put('/flights/{id}', [AirlineController::class, 'update']);


