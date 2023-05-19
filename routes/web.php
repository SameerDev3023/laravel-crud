<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudHandler;
use Illuminate\Http\Request;
use App\Models\formHandler;
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

Route::get('/', [crudHandler::class,'index']);
Route::get('/add-data', [crudHandler::class,'add_data']);
Route::get('/show-data',[crudHandler::class,'show_data']);
Route::post('/add-data/insert',[crudHandler::class , 'insert_data']);
Route::get('/delete/{id}',[crudHandler::class,'delete_user']);
Route::get('/edit/{id}',[crudHandler::class,'edit_user']);
Route::post('/update/{id}',[crudHandler::class,'update_data']);

