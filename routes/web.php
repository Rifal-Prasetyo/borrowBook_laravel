<?php

use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\RegisterController;
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

// PUBLIC ROUTE
Route::get('/', [HomeController::class, 'landingPage'])->name('homepage');
Route::get('/listbuku', [HomeController::class, 'listBooks'])->name('listBook');
Route::get('/listbuku/detail', [HomeController::class, 'detailBook'])->name('listBook');

//login route
Route::get('/login', [LoginController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [LoginController::class, 'loginAction'])->name('loginAction');

//Register Route
Route::get('/register', [RegisterController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [RegisterController::class, 'registerAction'])->name('registerAction');
