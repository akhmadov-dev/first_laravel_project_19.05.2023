<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/user-create', [UserController::class, 'store']);
Route::get('/user-show/{id}', [UserController::class, 'show']);
Route::get('/user-edit/{id}', [UserController::class, 'edit']);
Route::get('/user-update/{id}', [UserController::class, 'update']);
Route::delete('/user-delete/{id}', [UserController::class, 'destroy']);
