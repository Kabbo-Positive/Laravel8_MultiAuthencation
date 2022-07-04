<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Seller\SellerController;
use Illuminate\Support\Facades\Route;

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

/*-------Start Admin Route-------*/
Route::prefix('admin')->group(function(){

    Route::get('/login',[AdminController::class,'loginform'])->name('login_form');

    Route::post('/login/owner',[AdminController::class,'login'])->name('admin_login');

    Route::get('/dashboard',[AdminController::class,'index'])->name('admin_dashboard')->middleware('admin');

    Route::get('/logout',[AdminController::class,'logout'])->name('admin_logout')->middleware('admin');

    Route::get('/register',[AdminController::class,'registerform'])->name('register_form');

    Route::post('/register/create',[AdminController::class,'adminregister'])->name('admin_register');
});

/*-------End Admin Route-------*/

/*-------Start Admin Route-------*/
Route::prefix('seller')->group(function(){

    Route::get('/login',[SellerController::class,'sellerloginform'])->name('seller_login_form');

    Route::post('/login/owner',[SellerController::class,'sellerlogin'])->name('seller_login');

    Route::get('/dashboard',[SellerController::class,'index'])->name('seller_dashboard')->middleware('seller');

    Route::get('/logout',[SellerController::class,'sellerlogout'])->name('seller_logout')->middleware('seller');

    Route::get('/register',[SellerController::class,'sellerregisterform'])->name('seller_register_form');

    Route::post('/register/create',[SellerController::class,'sellerregister'])->name('seller_register');
});

/*-------End Admin Route-------*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
