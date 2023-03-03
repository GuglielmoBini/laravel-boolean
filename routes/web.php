<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EggController;

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

Route::get('/',[HomeController::class,"index"])->name("home");

Route::get('/eggs',[EggController::class,"index"])->name("eggs.index");
Route::get('/eggs/create',[EggController::class,"create"])->name("eggs.create");
Route::post('/eggs',[EggController::class,"store"])->name("eggs.store");
Route::delete('/eggs/{egg}',[EggController::class,"destroy"])->name("eggs.destroy");
Route::get('/eggs/{egg}/edit',[EggController::class,"edit"])->name("eggs.edit");
Route::put('/eggs/{egg}',[EggController::class,"update"])->name("eggs.update");
Route::get('/eggs/{id}',[EggController::class,"show"])->name("eggs.show");