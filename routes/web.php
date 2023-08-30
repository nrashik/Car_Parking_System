<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlotControlller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoreyController;
use App\Http\Controllers\CustomerReportController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
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
Route::get('/customer-login',[CustomerController::class,'login'])->name('customer.login');



Route::get('/all-locations',[HomeController::class,'allLocation'])->name('all.location');

Route::get('/search',[HomeController::class,'search'])->name('search');


Route::get('/customer-profile',[ProfileController::class,'profile'])->name('profile');


Route::get('/customer-report',[CustomerReportController::class,'report'])->name('customer.report');
Route::get('/customer-search-report',[CustomerReportController::class,'customerReport'])->name('customer.search.report');


Route::get('/Contact-Us',[HomeController::class,'contact'])->name('contactUs');
Route::post('/Contact-store',[HomeController::class,'store'])->name('contactUs.store');
Route::get('/Contact-list',[HomeController::class,'list'])->name('contactUs.list');
Route::get('/Contact-delete/{id}',[HomeController::class,'delete'])->name('contactUs.delete');




Route::get('/customer-registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');


Route::post('/customer-ddologin',[CustomerController::class,'dologin'])->name('customer.dologin');



Route::post('/review',[ReviewController::class,'review'])->name('review.store');
Route::get('/review-list',[ReviewController::class,'list'])->name('review.list');
Route::get('/review-delete',[ReviewController::class,'delete'])->name('review.delete');







//.......................................Middlewear for Booking...........................................
Route::group(['middleware'=>'frontendAuth'],function(){

Route::get('/customer-logout',[CustomerController::class,'logout'])->name('customer.logout');
Route::get('/booking-form/{id}',[BookingController::class,'booking'])->name('booking');

});




Route::get('/location-under-area/{id}',[LocationController::class,'areaWiseLocations'])->name('area.location');




Route::post('/booking-store/{id}',[BookingController::class,'store'])->name('booking.store');




//................................Admin Panel Routes.................................................................

Route::group(['prefix'=>'admin'],function(){

Route::get('/admin/login',[UserLoginController::class,'login'])->name('user.login');
Route::post('/admin/dologin',[UserLoginController::class,'dologin'])->name('dologin');


Route::group(['middleware'=>'auth'],function(){

Route::get('/logout',[UserLoginController::class,'logout'])->name('user.logout');


Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/slot',[SlotControlller::class,'slot'])->name('slot');




Route::get('/categorey',[CategoreyController::class,'categorey'])->name('categorey.list');
Route::get('/create',[CategoreyController::class,'create'])->name('categorey.create');
Route::post('/store',[CategoreyController::class,'store'])->name('categorey.store');


Route::get('/ParkingArea_list',[AreaController::class,'list'])->name('area.list');
Route::get('/new_area',[AreaController::class,'add'])->name('add.area');
Route::post('/store_area',[AreaController::class,'store'])->name('area.store');
Route::get('/area-edit/{id}',[AreaController::class,'edit'])->name('area.edit');
Route::put('/area-update/{id}',[AreaController::class,'update'])->name('area.update');
Route::get('/area-delete/{id}',[AreaController::class,'delete'])->name('area.delete');


Route::get('/report',[ReportController::class,'reportpage'])->name('report.page');



Route::get('/generate-report',[ReportController::class,'totallBillReport'])->name('total.report');
Route::get('/gsearch-report',[ReportController::class,'reportSearch'])->name('report.search');
Route::get('/totallBillReport',[ReportController::class,'generalReport'])->name('general.report');


Route::get('/location_list',[LocationController::class,'list'])->name('location.list');
Route::get('/add_location',[LocationController::class,'add'])->name('location.add');
Route::post('/store_location',[LocationController::class,'store'])->name('location.store');
Route::get('/add_edit/{id}',[LocationController::class,'edit'])->name('location.edit');
Route::put('/add_update/{id}',[LocationController::class,'update'])->name('location.update');
Route::get('/add-delete/{id}',[LocationController::class,'delete'])->name('location.delete');








Route::get('/booking-list',[BookingController::class,'list'])->name('booking.list');


Route::get('/vehicle',[VehicleController::class,'vehicle'])->name('vehicle.list');


});


});