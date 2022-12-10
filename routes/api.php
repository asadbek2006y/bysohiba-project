<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/dresses', [ApiController::class, 'getdress']);
Route::get('/shoes', [ApiController::class, 'getshoes']);
Route::get('/accesories', [ApiController::class, 'getaccesories']);
Route::get('/works', [ApiController::class, 'getworks']);
Route::get('/gallaries', [ApiController::class, 'getgallaries']);
Route::get('/adresses', [ApiController::class, 'getadresses']);
Route::get('/abdresses', [ApiController::class, 'getabdress']);
Route::get('/fotogallaries',[ApiController::class, 'getfotogallary']);
Route::get('/visagets',[ApiController::class, 'getvisagets']);




