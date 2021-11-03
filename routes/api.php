<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\HotelController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {
   Route::post('logout',[authController::class,'logout']);
  
});
Route::post("register",[authController::class,'register']);
Route::post("login",[authController::class,'login']);

Route::post('createhotel',[HotelController::class,'store']);
Route::get('getallhotel',[HotelController::class,'index']);