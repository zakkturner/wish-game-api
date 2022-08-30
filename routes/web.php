<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameWinnersController;
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

Route::get('/',[GameWinnersController::class, 'index']);

postgres://xlejhhsmuowqly:57f0c82268dc300c4c8de1241c302d30a93f7bb73dc880e5988bdde265867999@ec2-44-205-112-253.compute-1.amazonaws.com:5432/d4nueqpv4u7i67
