<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HutangsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\List_;

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

Route::get('/',[HomeController::class,'index'])->middleware('auth');


Route::resource('/history',HistoryController::class)->middleware('auth');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::get('/hutang',[HutangsController::class,'index'])->middleware('auth');
Route::get('/hutang/{hutang:slug}',[HutangsController::class,'list']);

Route::get('/paket', [PaketsController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
