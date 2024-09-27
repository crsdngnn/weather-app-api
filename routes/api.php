<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'weather'], function ($router) {
    $router->get('/', [WeatherController::class, 'getWeather']);
});

Route::group(['prefix' => 'location'], function ($router) {
    $router->get('/', [LocationController::class, 'getLocation']);
});