<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParameterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/parameter', [ParameterController::class,'index']);
Route::get('/parameter/prm', [ParameterController::class,'parameters']);
Route::get('/parameter/dtb', [ParameterController::class,'databases']);
Route::get('/parameter/tbl', [ParameterController::class,'tables']);
Route::get('/parameter/fld', [ParameterController::class,'folders']);
Route::get('/parameter/fie', [ParameterController::class,'fields']);
Route::get('/parameter/fil', [ParameterController::class,'files']);
Route::get('/parameter/int', [ParameterController::class,'interfaces']);
Route::get('/parameter/wkf', [ParameterController::class,'workflows']);
Route::get('/parameter/qry', [ParameterController::class,'queries']);
