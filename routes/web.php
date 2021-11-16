<?php

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

Route::get('/', function () {
    return view('home');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/developers', [App\Http\Controllers\HomeController::class, 'developers']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');

Route::get('/listdevelopers', [App\Http\Controllers\AdminController::class, 'listdevelopers'])->middleware('admin');

Route::post('/adddev', [App\Http\Controllers\AdminController::class, 'adddev'])->middleware('admin');

Auth::routes();

