<?php

use Illuminate\Support\Facades\Route;
use Modules\User\App\Http\Controllers\UserController;

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

// Route::group([], function () {
//     Route::resource('user', UserController::class)->names('user');
// });

Route::get('/users',[UserController::class,'index']);
Route::get('add-user',[UserController::class,'create']);
Route::post('/add-user',[UserController::class,'store']);
Route::get('/edit-user/{id}',[UserController::class,'edit']);
Route::post('/edit-user/{id}',[UserController::class,'update']);
Route::post('/delete-user/{id}',[UserController::class,'destroy']);


