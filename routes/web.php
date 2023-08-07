<?php

use App\Http\Controllers\AreaController;
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


Route::get('/search',[HomeController::class,'search'])->name('search');


Route::get('/customer-registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');
Route::post('/customer-login',[CustomerController::class,'dologin'])->name('customer.login');









//Admin Panel Routes.................................................................

Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/slot',[SlotControlller::class,'slot'])->name('slot');


Route::get('/customer-list',[CustomerController::class,'customerList'])->name('customer.list');
Route::get('/user',[UserController::class,'info'])->name('User.info');
Route::get('/create-user',[UserController::class,'create'])->name('create.user');
Route::post('/user-store',[UserController::class,'store'])->name('user.store');

Route::get('/categorey',[CategoreyController::class,'categorey'])->name('categorey.list');
Route::get('/create',[CategoreyController::class,'create'])->name('categorey.create');
Route::post('/store',[CategoreyController::class,'store'])->name('categorey.store');

Route::get('/ParkingArea_list',[AreaController::class,'list'])->name('area.list');
Route::get('/new_area',[AreaController::class,'add'])->name('add.area');
Route::post('/store_area',[AreaController::class,'store'])->name('area.store');

Route::get('/ParkingArea_Location',[VehicleController::class,'vehicle'])->name('vehicle.list');