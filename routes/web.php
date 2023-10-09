<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


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
});
Route::view('/login', 'login')->name('login');
Route::view('/home','index');
Route::view('/','layouts.default');
Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
Route::post('/signup',[AuthController::class, 'signup']);
Route::post('/login',[AuthController::class, 'login'])->name('user.login');