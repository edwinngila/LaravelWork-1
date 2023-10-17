<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
Route::view('/about','about');

Route::view('/','layouts.default');
Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
Route::post('/signup',[AuthController::class, 'signup']);
Route::post('/login',[AuthController::class, 'login'])->name('user.login');



// Create a new user
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

// Read users
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);

// Update user
Route::get('/users/{user}/edit', [UserController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update']);

// Delete user
Route::delete('/users/{user}', [UserController::class, 'destroy']);
