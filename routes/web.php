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
Route::get('/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('/', function () {
    return view('home');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homee', "HomeController@home");
Route::get('/property/{id}', "HomeController@property");

Route::get('/developers', [App\Http\Controllers\HomeController::class, 'developers']);
Route::get('/developer', [App\Http\Controllers\HomeController::class, 'developer']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus']);

Route::get('/searchproperties', [App\Http\Controllers\HomeController::class, 'searchproperties']);

Route::get('/wishlist', [App\Http\Controllers\HomeController::class, 'wishlist']);

Route::get('/wishlistview', [App\Http\Controllers\HomeController::class, 'wishlistview']);







Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');

Route::get('/admin/listdevelopers', [App\Http\Controllers\AdminController::class, 'listdevelopers'])->middleware('admin');

Route::post('/admin/adddev', [App\Http\Controllers\AdminController::class, 'adddev'])->middleware('admin');

Route::get('/admin/listcategory', [App\Http\Controllers\AdminController::class, 'listcategory'])->middleware('admin');

Route::post('/admin/addcat', [App\Http\Controllers\AdminController::class, 'addcat'])->middleware('admin');

Route::get('/admin/listproject', [App\Http\Controllers\AdminController::class, 'listproject'])->middleware('admin');

Route::get('/admin/listunit', [App\Http\Controllers\AdminController::class, 'listunit'])->middleware('admin');

Route::post('/admin/addproject', [App\Http\Controllers\AdminController::class, 'addproject'])->middleware('admin');

Route::get('/admin/viewproject/{slug}', "AdminController@viewproject")->middleware('admin');

Route::get('/admin/listunittypes/{slug}', "AdminController@listunittypes")->middleware('admin');

Route::post('/admin/addunittype', "AdminController@addunittype")->middleware('admin');

Route::get('/admin/listgallery/{slug}', "AdminController@listgallery")->middleware('admin');

Route::post('/admin/file', "AdminController@filesupload")->middleware('admin');

Route::get('/admin/listdistrict', [App\Http\Controllers\AdminController::class, 'listdistrict'])->middleware('admin');

Route::post('/admin/adddistrict', [App\Http\Controllers\AdminController::class, 'adddistrict'])->middleware('admin');

Route::get('/admin/listpropertytype', [App\Http\Controllers\AdminController::class, 'listpropertytype'])->middleware('admin');

Route::post('/admin/addpropertytype', [App\Http\Controllers\AdminController::class, 'addpropertytype'])->middleware('admin');

Route::any('/admin/listfacilities', [App\Http\Controllers\AdminController::class, 'listfacilities'])->middleware('admin');
Route::post('/admin/addfacilities', [App\Http\Controllers\AdminController::class, 'addfacilities'])->middleware('admin');
Auth::routes();

