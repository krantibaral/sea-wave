<?php

use App\Http\Controllers\Admin\MenuCategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';


Auth::routes();

Route::get('/', [FrontController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('menu-categories', MenuCategoryController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('reservations', ReservationController::class);
});

Route::get('/menu', [FrontController::class, 'menu'])->name('front.menu');
Route::get('/about-us', [FrontController::class, 'about'])->name('front.about');
Route::get('/menu-details/{slug}', [FrontController::class, 'menuDetails'])->name('front.menu-details');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::post('/book-table', [FrontController::class, 'bookTable'])->name('bookTable');
Route::post('/reservations', [FrontController::class, 'store'])->name('reservations.store');
Route::post('/contact', [FrontController::class, 'submit'])->name('contact.submit');
