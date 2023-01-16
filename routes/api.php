<?php

use App\Http\Controllers\carsController;
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

Route::controller(carsController::class)->group(function(){
    Route::get("/cars/getAll","getCars");
    Route::get("/cars/getById/{id}","getCarById");
    Route::put("/cars/update/{id}","updateCar");
    Route::post("/cars/create","createCar");
    Route::put("cars/updateBrand/{id}","updateBrand");
});

//Route::post('/cars/create',[carsController::class,"createCar"]);

