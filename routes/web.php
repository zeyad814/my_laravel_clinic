<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;
use App\Models\category;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\auth2\authcontroller;
use App\Http\Controllers\front\homeController;
use App\Http\Controllers\front\majorsController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\front\doctorsController;
use App\Http\Controllers\front\contactsController;
use App\Http\Controllers\admin\admin_homeController;



use App\Http\Controllers\admin\admin_majorsController;
use App\Http\Controllers\admin\admin_doctorsController;
use App\Http\Controllers\admin\admin_contactsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin_home',[admin_homeController::class, 'index'])->name('admin.pages.home');
Route::get('/booking',[BookingController::class, 'index'])->name('admin.pages.booking');
Route::get('/admin_majors',[admin_majorsController::class, 'index'])->name('admin.pages.majors');
Route::get('/addMajor',[admin_majorsController::class, 'addmajor'])->name('admin.pages.majors.addmajor');
Route::post('/addMajor',[admin_majorsController::class, 'submitmajor'])->name('submitmajor');
Route::get('/admin_doctors',[admin_doctorsController::class, 'index'])->name('admin.pages.doctors');
Route::get('/admin_adddoctors',[admin_doctorsController::class, 'adddoctor'])->name('adddoctor');
Route::post('/admin_adddoctors',[admin_doctorsController::class, 'submitadddoctor'])->name('submitadddoctor');
Route::get('/admin_editdoctor/{id}',[admin_doctorsController::class, 'editdoctor'])->name('editdoctor');
Route::post('/admin_editdoctor/{id}',[admin_doctorsController::class, 'submiteditdoctor'])->name('submiteditdoctor');
Route::delete('/admin_deletedoctor/{id}',[admin_doctorsController::class, 'destroy'])->name('deletedoctor');
Route::delete('/admin_deletebook/{id}',[BookingController::class, 'submitdeletebook'])->name('deletebook');
Route::delete('/confirmcontact/{id}',[BookingController::class, 'confirm_contact'])->name('confirm_contact');
Route::get('/admin_contacts',[admin_contactsController::class, 'index'])->name('admin.pages.contacts');
// });
// Route::middleware('auth:user')->group(function(){

// });
Route::middleware('guest')->group(function(){
    Route::get('/login',[authcontroller::class, 'login'])->name('login');
    Route::post('/login',[authcontroller::class, 'submitLogin'])->name('submitLogin');
    Route::get('/register',[authcontroller::class,'register'])->name('register');
    Route::post('/register',[authcontroller::class,'submitRegister'])->name('submit_register');
});
Route::get('/',[homeController::class, 'index'])->name('front.pages.home');
Route::get('/majors',[majorsController::class, 'index'])->name('front.pages.majors');
Route::get('/doctors',[doctorsController::class, 'index'])->name('front.pages.doctors');
Route::get('/doctors/{major_id}',[doctorsController::class, 'showBYmajor'])->name('showBYmajor');
Route::get('/showDoctordoctos/{id}',[doctorsController::class, 'show'])->name('front.pages.doctors.show');
Route::post('/showDoctor',[doctorsController::class, 'submitBooking'])->name('submitBooking');
Route::post('/contacts',[contactsController::class, 'submitContact'])->name('submitContact');
Route::get('/contacts',[contactsController::class, 'index'])->name('front.pages.contacts');



Route::get('/logout',[authcontroller::class, 'logout'])->name('logout');








