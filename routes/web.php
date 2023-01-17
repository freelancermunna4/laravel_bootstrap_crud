<?php

use App\Http\Controllers\studentsController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[studentsController::class,'index']);
Route::post('students/insert',[studentsController::class,'create']);
Route::get('students/delete/{id?}',[studentsController::class,'destroy']);