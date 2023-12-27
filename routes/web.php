<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\front;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\dashboard;
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

Route::get('/',[front\HomeController::class,'index'])->name('home');
Route::get('/home',[front\HomeController::class,'index']);
Route::middleware(['auth.checkuserlogin'])->group(function () {
    Route::get('/user-profile',[front\HomeController::class,'user_profile']);
    Route::get('/edituser',[front\HomeController::class,'edituser']);
    Route::post('/edituser',[front\HomeController::class,'updateuser']);
    Route::get('/history-user',[front\CheckOutController::class,'history_book']);
    Route::get('/logout-user',[front\HomeController::class,'logout']);
});

Route::get('/search-hospital',[front\HomeController::class,'search_hospital']);
Route::get('/search-doctor',[front\HomeController::class,'search_doctor']);
Route::get('/search-service',[front\HomeController::class,'search_service']);
Route::get('/ho-so-csyt/{hospital_code}',[front\HomeController::class,'ho_so_csyt']);
Route::get('/book-doctor/{doctor_id}',[front\HomeController::class,'book_doctor']);
Route::get('/cancel-booking/{doctor_id}',[front\HomeController::class,'cancel_booking']);
Route::get('/booking-doctor/{doctor_id}',[front\CheckOutController::class,'booking_doctor'])->middleware('auth.userlogin');
Route::get('/hscsyt', function () {
    return view('front.Hosobv');
});

Route::get('/handbook', function () {
    return view('front.HandBook');
});
Route::get('/doi-tac', function () {
    return view('front.Doitac');
});
Route::post('/signup-user',[front\HomeController::class,'signup_user']);
Route::post('/signin-user',[front\HomeController::class,'signin_user']);
Route::post('/timkiem-bv',[front\CheckOutController::class,'search_hospital']);
Route::post('/timkiem-bs',[front\CheckOutController::class,'search_doctor']);
Route::get('/send-mail',[front\CheckOutController::class,'sendmail']);
Route::post('/send-book',[front\CheckOutController::class,'sendBook']);

/*** ADMIN*****/
Route::get('/admin-login', function () {
    return view('dashboard.admin_login');
})->name('admin.login');
Route::post('/admin-dashboard',[dashboard\AdminController::class,'dashboard']);
Route::middleware(['auth.adminlogin'])->group(function () {

Route::get('/logout',[dashboard\AdminController::class,'log_out']);
Route::get('/admin-dashboard',[dashboard\AdminController::class,'admin_dashboard'])->name('admin.index');
Route::get('/search-customer',[dashboard\AdminController::class,'show_customer']);
Route::get('/show-detail-customer/{customer_id}',[dashboard\AdminController::class,'show_detail_customer']);
Route::get('/update-detail-customer/{customer_id}',[dashboard\AdminController::class,'update_detail_customer']);

Route::get('/admin-add-category-hospital',[dashboard\ProductController::class,'add_category_hospital']);
Route::get('/admin-add-category-doctor',[dashboard\ProductController::class,'add_category_doctor']);
Route::get('/admin-all-category-hospital',[dashboard\ProductController::class,'all_category_hospital']);
Route::post('/save-category-hospital',[dashboard\ProductController::class,'save_category_hospital']);
Route::get('/admin-edit-category-hospital/{hospital_id}',[dashboard\ProductController::class,'edit_category_hospital']);
Route::post('/admin-update-category-hospital/{hospital_id}',[dashboard\ProductController::class,'update_category_hospital']);
Route::get('/admin-delete-category-hospital/{hospital_id}',[dashboard\ProductController::class,'delete_category_hospital']);

Route::get('/admin-all-category-doctor',[dashboard\ProductController::class,'all_category_doctor']);
Route::get('/admin-edit-category-doctor/{doctor_id}',[dashboard\ProductController::class,'edit_category_doctor']);
Route::post('/save-category-doctor',[dashboard\ProductController::class,'save_category_doctor']);
Route::post('/admin-update-category-doctor/{doctor_id}',[dashboard\ProductController::class,'update_category_doctor']);
Route::get('/admin-delete-category-doctor/{doctor_id}',[dashboard\ProductController::class,'delete_category_doctor']);
});
Route::get('test1',function(){
    return view('test');
})->name('test');
Route::get('test2',[front\HomeController::class,'test2']);

