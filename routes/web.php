<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\front\PortfolioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/category/{slug}', [CategoryController::class, 'index'])->name('category');
*/
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [CategoryController::class, 'index'])->name('projectCategory');

Route::match(['post', 'get'], '/contact-me', [AuthController::class, 'contactMe'])->name('contactMe');


//  Route::view('/register', 'front.contact')->name('register');
