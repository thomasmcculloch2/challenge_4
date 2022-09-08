<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AirlineController;

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


