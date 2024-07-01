<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('register', [AuthController::class, 'register'])->name('register');

// Route::get('presentation', [AuthController::class, 'presentation'])->name('presentation');


Route::post('/signup', [AuthController::class ,'signup'])->name('signup');
Route::post('/login', [AuthController::class ,'login'])->name('login');

Route::post('/store', [AuthController::class ,'store'])->name('store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/presentation/{basic}/{deal}/{history}/{month}', [AuthController::class, 'presentation'])->name('presentation');

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/entryform', function () {
    return view('welcome');
});


Route::get('/presentation', function () {
    return view('presentation');
});
