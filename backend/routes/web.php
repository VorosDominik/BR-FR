<?php

use App\Http\Controllers\WriterConroller;
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
Route::get('/writers',[WriterConroller::class,'index']);
Route::post('/writers',[WriterConroller::class,'store']);
Route::put('/writers{id}',[WriterConroller::class,'update']);
Route::delete('/writers{id}',[WriterConroller::class,'destroy']);