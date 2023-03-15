<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

/*
*Route::get('/', function () {
*   return view('welcome');
*});
*/

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/signin', [LoginController::class, 'signin'])->name('signin');
Route::post('/signup', [LoginController::class, 'signup'])->name('signup');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');