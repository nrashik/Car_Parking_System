<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlotControlller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoreyController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\CustomerController;



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


//Website Panel Routes................................................................

Route::get('/SmartParking',[HomeController::class,'home'])->name('home');
Route::get('/customer-login',[HomeController::class,'login'])->name('customer.login');



Route::get('/customer-registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');







//Admin Panel Routes.................................................................

Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/slot',[SlotControlller::class,'slot'])->name('slot');

Route::get('/user',[UserController::class,'info'])->name('User.info');
Route::get('/create-user',[UserController::class,'create'])->name('create.user');
Route::post('/user-store',[UserController::class,'store'])->name('user.store');

Route::get('/categorey',[CategoreyController::class,'categorey'])->name('categorey.list');
Route::get('/create',[CategoreyController::class,'create'])->name('categorey.create');
Route::post('/store',[CategoreyController::class,'store'])->name('categorey.store');

Route::get('/vehicle',[VehicleController::class,'vehicle'])->name('vehicle.list');