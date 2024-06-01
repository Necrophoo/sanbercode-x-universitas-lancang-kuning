<?php

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


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataTablesController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

//master

Route::get('/tables', [TablesController::class, 'table']);
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/data-tables', [DataTablesController::class, 'datatables']);
Route::get('/master', [HomeController::class, 'master']);

//cast
Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);
Route::get('/cast/{cast_id}', [CastController::class, 'show']);
Route::get('/cast/{cast_id}/edit',  [CastController::class, 'edit']);
Route::put('/cast/{cast_id}',  [CastController::class, 'update']);
Route::delete('/cast/{cast_id}',  [CastController::class, 'destroy']);