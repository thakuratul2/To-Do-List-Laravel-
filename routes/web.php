<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDolistController;

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

Route::get('/',[ToDolistController::class,'index']);
Route::get('/create',[ToDolistController::class,'create']);
Route::get('/store_data',[ToDolistController::class,'store']);
Route::get('/delete/{id}',[ToDolistController::class,'destroy']);
Route::get('/edit/{id}',[ToDolistController::class,'edit']);