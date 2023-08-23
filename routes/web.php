<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlotControlller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoreyController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\CustomerController;
use App\Http\Controllers\Website\ReviewController;
use App\Http\Controllers\WebsiteLocationController;

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


//....................................Website Panel Routes................................................................

Route::get('/SmartParking',[HomeController::class,'home'])->name('homepage');
Route::get('/customer-login',[HomeController::class,'login'])->name('customer.login');



Route::get('/all-locations',[HomeController::class,'allLocation'])->name('all.location');


Route::get('/search',[HomeController::class,'search'])->name('search');


Route::get('/Contact-Us',[HomeController::class,'contact'])->name('contactUs');


Route::get('/customer-registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');
Route::post('/customer-login',[CustomerController::class,'dologin'])->name('customer.login');



Route::post('/review',[ReviewController::class,'review'])->name('review.store');






//.......................................Middlewear for Booking...........................................
// Route::group(['middleware'=>'FrontendAuthentication'],function(){

Route::get('/customer-logout',[CustomerController::class,'logout'])->name('customer.logout');
Route::get('/booking-form',[BookingController::class,'booking'])->name('booking');

// });




Route::get('/location-under-area/{id}',[LocationController::class,'areaWiseLocations'])->name('area.location');




Route::post('/booking-store',[BookingController::class,'store'])->name('booking.store');




//................................Admin Panel Routes.................................................................

Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/slot',[SlotControlller::class,'slot'])->name('slot');




Route::get('/admin/login',[UserLoginController::class,'login'])->name('user.login');
Route::get('/admin/dologin',[UserLoginController::class.'dologin'])->name('user.dologin');




Route::get('/categorey',[CategoreyController::class,'categorey'])->name('categorey.list');
Route::get('/create',[CategoreyController::class,'create'])->name('categorey.create');
Route::post('/store',[CategoreyController::class,'store'])->name('categorey.store');

Route::get('/ParkingArea_list',[AreaController::class,'list'])->name('area.list');
Route::get('/new_area',[AreaController::class,'add'])->name('add.area');
Route::post('/store_area',[AreaController::class,'store'])->name('area.store');


Route::get('/location_list',[LocationController::class,'list'])->name('location.list');
Route::get('/add_location',[LocationController::class,'add'])->name('location.add');
Route::post('/store_location',[LocationController::class,'store'])->name('location.store');


Route::get('/vehicle',[VehicleController::class,'vehicle'])->name('vehicle.list');