<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistrationController;

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
Route::get('/', [FrontendController::class, 'index']);
Route::get('/course_details', [FrontendController::class, 'course']);
Route::get('/registation', [FrontendController::class, 'registration']);
Route::post('/register_post', [RegistrationController::class, 'register_store']);
Route::get('/candidate_view',[RegistrationController::class,'register_view']);
Route::get('/register/delete/{id}',[RegistrationController::class,'register_delete']);

//Admin
Route::get('/register', [AdminController::class, 'register']);
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::controller(AdminController::class)->group(function () {
    Route::get('/login', 'login')->name('login.view');
    Route::post('/post_login', 'login_post');
    Route::get('/logout', 'logout')->name('logout');
});

//contact form
Route::get('/contact', [ContactController::class, 'add'])->name("contact");
Route::post('/contact_store', [ContactController::class, 'store'])->name("contact_store");
Route::get('/contact_view',[ContactController::class,'contact_view']);
Route::get('/contacts/delete/{id}',[ContactController::class,'delete'])->name('contact_delete');

// Testimonial
Route::get('/create_testimonial', [TestimonialController::class, 'create_testimonial'])->name("create_testimonial");
Route::post('/store_testimonial', [TestimonialController::class, 'store_testimonial'])->name("store_testimonial");
Route::get('/view_testimonial', [TestimonialController::class, 'view_testimonial']);
Route::get('/testimonial_delete/{id}', [TestimonialController::class, 'delete'])->name('testimonial_delete');
Route::get('/edit_testimonial/{id}', [TestimonialController::class, 'edit_testimonial'])->name('edit_testimonial');
Route::post('/update_testimonial/{id}', [TestimonialController::class, 'update_testimonial'])->name('update_testimonial');

//course
Route::get('/create_course', [CourseController::class, 'create_course'])->name('create_course');
Route::post('/store_course', [CourseController::class, 'store_course']);
Route::get('/view_course',[CourseController::class,'view_course'])->name('course');
Route::get('/course_delete/{id}',[CourseController::class,'destroy']);
Route::get('/edit_course/{id}',[CourseController::class,'edit_course']);
Route::post('/update_course/{id}',[CourseController::class,'update_course']);
