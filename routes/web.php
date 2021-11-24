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
Route::get('/homee', "HomeController@home");
Route::get('/property/{id}', "HomeController@property");


Route::get('/developers', [App\Http\Controllers\HomeController::class, 'developers']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus']);

Route::get('/searchproperties', [App\Http\Controllers\HomeController::class, 'searchproperties']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');

Route::get('/listdevelopers', [App\Http\Controllers\AdminController::class, 'listdevelopers'])->middleware('admin');

Route::post('/adddev', [App\Http\Controllers\AdminController::class, 'adddev'])->middleware('admin');

Route::get('/listcategory', [App\Http\Controllers\AdminController::class, 'listcategory'])->middleware('admin');

Route::post('/addcat', [App\Http\Controllers\AdminController::class, 'addcat'])->middleware('admin');

Route::get('/listproject', [App\Http\Controllers\AdminController::class, 'listproject'])->middleware('admin');

Route::post('/addproject', [App\Http\Controllers\AdminController::class, 'addproject'])->middleware('admin');

Route::get('/admin/viewproject/{slug}', "AdminController@viewproject")->middleware('admin');

Route::get('/listdistrict', [App\Http\Controllers\AdminController::class, 'listdistrict'])->middleware('admin');

Route::post('/adddistrict', [App\Http\Controllers\AdminController::class, 'adddistrict'])->middleware('admin');

Route::get('/listpropertytype', [App\Http\Controllers\AdminController::class, 'listpropertytype'])->middleware('admin');

Route::post('/addpropertytype', [App\Http\Controllers\AdminController::class, 'addpropertytype'])->middleware('admin');

Auth::routes();

