<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('home',[HomeController::class,'show'])->name('acte de vente');
Route::get('ajout',[HomeController::class,'showw'])->name('ajouter');
Route::get('insertion',[HomeController::class,'add'])->name('insertion');
Route::get('/save/{id}', [HomeController::class,'save'])->name('save');