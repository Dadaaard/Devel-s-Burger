<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('lah');
});

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/homepage', [HomeController::class,'homepage']);
Route::get('/post_page', [AdminController::class,'post_page']);
Route::post('/add_post', [AdminController::class,'add_post']);
Route::get('/show_data', [AdminController::class,'show_data']);
Route::get('/delete_post/{id}', [AdminController::class,'delete_post']);
Route::get('/edit_page/{id}', [AdminController::class,'edit_page']);
Route::post('/update_post/{id}', [AdminController::class,'update_post']);

Route::get('/search', [AdminController::class,'searchdata']);
Route::get('/admin_orders', [AdminController::class,'admin_orders']);



//OrderController
Route::post('/add_cart/{id}', [OrderController::class,'add_cart']);
Route::get('/show_cart', [OrderController::class,'show_cart']);
Route::get('/remove_cart/{id}', [OrderController::class,'remove_cart']);
Route::get('/checkout_order', [OrderController::class,'checkout_order']);

Route::post('/add_cart/{id}', [OrderController::class,'add_cart']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
