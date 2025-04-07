<?php

use App\Http\Controllers\Admin\MenuCategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('menu-categories', MenuCategoryController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('testimonials', TestimonialController::class);
});

Route::get('/menu', [FrontController::class, 'menu'])->name('front.menu');
