<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DstvController;
use App\Http\Controllers\ZesaController;
use App\Http\Controllers\EconetController;
use Illuminate\Auth\Middleware\Authenticate;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get( 'users',[App\Http\Controllers\UsersController::class,'Users'])->middleware('auth');

// Econet
Route::get( '/econet/completed',[EconetController::class,'completed'])->middleware('auth');
Route::get( '/econet/pending',[App\Http\Controllers\EconetController::class,'pending'])->middleware('auth');
Route::get( '/econet/failed-payment',[App\Http\Controllers\EconetController::class,'failed_payements'])->middleware('auth');
Route::get( '/econet/failed-tokens',[App\Http\Controllers\EconetController::class,'failed_tokens'])->middleware('auth');

// Zesa
Route::get( 'zesa/failed-tokens',[ZesaController::class,'failed_tokens'])->middleware('auth');
Route::get( 'zesa/duplicate-tokens',[App\Http\Controllers\ZesaController::class,'duplicate'])->middleware('auth');
Route::get( 'zesa/failed-payment',[App\Http\Controllers\ZesaController::class,'failed_payements'])->middleware('auth');
Route::get( 'zesa/pending',[App\Http\Controllers\ZesaController::class,'pending'])->middleware('auth');
Route::get( 'zesa/completed',[App\Http\Controllers\ZesaController::class,'completed'])->middleware('auth');

// // Dstv
Route::get( 'dstv/pending',[App\Http\Controllers\DstvController::class,'pending'])->middleware('auth');
Route::get( 'dstv/processing',[DstvController::class,'processing'])->middleware('auth');
Route::get( 'dstv/failed-payment',[App\Http\Controllers\DstvController::class,'failed'])->middleware('auth');
Route::get( 'dstv/paid',[App\Http\Controllers\DstvController::class,'paid'])->middleware('auth');
Route::get( 'dstv/completed',[App\Http\Controllers\DstvController::class,'completed'])->middleware('auth');


