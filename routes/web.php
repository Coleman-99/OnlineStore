<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
//Create
//Read
//Update
//delete



Route::get('/', [ProductController::class, 'index']);
Route::get('/products', [ProductController::class, 'result']);
Route::get('/products/upload', [ProductController::class, 'uploadPage'])->middleware('auth');
Route::post('/products/upload/create', [ProductController::class, 'create'])->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'read']);
Route::post('user/register', [UserController::class, 'register'])->middleware('guest');
Route::get('user/login', [UserController::class, 'loginPage'])->name('login')->middleware('guest');
Route::post('user/user/authenticated/login', [UserController::class, 'authenticate']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
