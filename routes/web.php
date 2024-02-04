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

Route::middleware('auth')->group(function(){
   Route::get('/',[HomeController::class,'index']);
   Route::resource('/history',HistoryController::class);
   Route::get('/dashboard',[DashboardController::class,'index']);
   Route::controller(HutangsController::class)->group(function(){
      Route::get('/hutang','index');
      Route::get('/hutang/{hutang:id}','list');
   });
   Route::get('/paket', [PaketsController::class, 'index']);
});
Route::middleware('guest')->group(function(){
   Route::controller(LoginController::class)->group(function(){
      Route::get('/login','index')->name('login');
      Route::post('/login','authenticate');
   });
   Route::controller(RegisterController::class)->group(function(){
      Route::get('/register', 'index');
      Route::post('/register', 'store');
   });
});
Route::post('/logout',[LoginController::class,'logout']);
