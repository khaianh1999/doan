<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;

use App\Http\Controllers\Api\PhonesController;
use App\Http\Controllers\Api\LaptopsController;
use App\Http\Controllers\Api\HeadphonesController;
use App\Http\Controllers\Api\TabletsController;

use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\CustomersController;

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

Route::resource('users',UsersController::class);

Route::resource('phones',PhonesController::class);
Route::resource('laptops',LaptopsController::class);
Route::resource('headphones',HeadphonesController::class);
Route::resource('tablets',TabletsController::class);

Route::resource('orders',OrdersController::class);
Route::resource('customers',CustomersController::class);
