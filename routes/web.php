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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa',[App\Http\Controllers\SiswaController::class,'view']);


Route::get('/siswa/create',[App\Http\Controllers\SiswaController::class,'create']);
Route::post('/siswa/create',[App\Http\Controllers\SiswaController::class,'store']);

Route::get('/ siswa/{id}/edit',[App\Http\Controllers\SiswaController::class,'edit']);
Route::post('/siswa/edit',[App\Http\Controllers\SiswaController::class,'update']);

Route::get('/siswa/{id}/delete',[App\Http\Controllers\SiswaController::class,'destroy']);