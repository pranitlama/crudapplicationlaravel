<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/',[CrudController::class,'display']);
Route::get('delete/{id}',[Crudcontroller::class,'delete']);
Route::get('edit/{id}',[Crudcontroller::class,'edit']);

Route::post('/',[CrudController::class,'gotowel'])->name('addbtn');
Route::post('/welcome',[Crudcontroller::class,'saveitem'])->name('save');
Route::post('/edit',[Crudcontroller::class,'updatelist'])->name('update');
