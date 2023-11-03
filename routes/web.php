<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\viewProductsController;
use App\Http\Controllers\ForgotPasswordController;

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

Route::get('/signup', function () {
    return view('signup');
});
Route::group(['middleware' => 'auth'], function(){
    Route::view('/dashboard', 'dashboard');
    Route::resource('users',UserController::class);
    Route::resource('products',ProductsController::class);
    Route::resource('viewProducts',viewProductsController::class);
});
Route::view('/login', 'login')->name('login');

Route::view('/about','about');

Route::view('/','layouts.default');
Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
Route::post('/signup',[AuthController::class, 'signup']);
Route::post('/login',[AuthController::class, 'login'])->name('user.login');

// Route::view('/reset-password', 'auth.reset-password')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
