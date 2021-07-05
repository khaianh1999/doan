<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\ForgotController;
use App\Http\Controllers\Admin\ChangePasswordController;

use App\Http\Controllers\Admin\PhonesController;
use App\Http\Controllers\Admin\LaptopsController;
use App\Http\Controllers\Admin\HeadphonesController;
use App\Http\Controllers\Admin\TabletsController;






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


Route::get('/', [LoginController::class, 'index'])->name('admin');
Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('forgot_password', [ForgotController::class, 'forgot'])->name('forgot');
Route::post('forgot_password', [ForgotController::class, 'password'])->name('password');
Route::post('forgot_password/resetPassAll', [ForgotController::class, 'resetPassAll'])->name('resetPassAll');

Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('customers', CustomersController::class);
    Route::resource('phones', PhonesController::class);
    Route::resource('laptops', LaptopsController::class);
    Route::resource('headphones', HeadphonesController::class);
    Route::resource('tablets', TabletsController::class);


    Route::get('history', [HistoryController::class, 'history'])->name('history');



    Route::resource('ChangePassword', ChangePasswordController::class);
    Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('passwordChange');
    Route::post('/change-password', [ChangePasswordController::class, 'changepassword'])->name('passwordUpdate');

    Route::delete('/users/delete/{id}', [UserController::class, 'destroy']);
    Route::delete('/customers/delete/{id}', [CustomersController::class, 'destroy']);

    Route::delete('/phones/delete/{id}', [PhonesController::class, 'destroy']);
    Route::delete('/laptops/delete/{id}', [LaptopsController::class, 'destroy']);
    Route::delete('/headphones/delete/{id}', [HeadphonesController::class, 'destroy']);
    Route::delete('/tablets/delete/{id}', [TabletsController::class, 'destroy']);


    Route::get('users/{id}/profile', [UserController::class, 'getProfile'])->name('users.profile');


    Route::get('users/{id}/profile', [UserController::class, 'getProfile'])->name('users.profile');
    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('change-language');

 
    Route::post('/users/update/{id}', [UserController::class, 'updateStatus']);

    Route::post('/phones/update/{id}', [PhonesController::class, 'updateStatus']);

    Route::post('/laptops/update/{id}', [LaptopsController::class, 'updateStatus']);

    Route::post('/tablets/update/{id}', [TabletsController::class, 'updateStatus']);

    Route::post('/headphones/update/{id}', [HeadphonesController::class, 'updateStatus']);
    
    


});
