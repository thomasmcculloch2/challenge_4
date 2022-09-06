<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ActionController;

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

Route::get('/', [CityController::class, 'index']);

Route::delete('/cities/{id}', [CityController::class, 'remove']);

Route::put('/cities/{id}', [CityController::class, 'edit']);

Route::post('add/{id}', [CityController::class, 'add']);
