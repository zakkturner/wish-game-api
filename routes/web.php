<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameWinnersController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/gamewinners',[GameWinnersController::class, 'index']);
Route::get('/',[GameWinnersController::class, 'index']);


Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
