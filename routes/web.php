<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ListItemController;

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
Route::get('/', [ListItemController::class, 'index']);
Route::post('/', [ListItemController::class, 'create']);
Route::get('/logo', [LogoController::class, 'index']);
