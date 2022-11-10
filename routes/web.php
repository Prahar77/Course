<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', function (Request $request) {
    return view('welcome');
});



Route::get('/Admin/create', 'App\Http\Controllers\Admin\AdminController@create')->name('admin.create');
Route::post('/Admin/store', 'App\Http\Controllers\Admin\AdminController@store')->name('admin.store');
Route::get('/Admin/list', 'App\Http\Controllers\Admin\AdminController@index')->name('admin.index');


Route::get('/Admin/show/{id}', 'App\Http\Controllers\Admin\AdminController@show')->name('admin.show');
Route::get('/Admin/edit/{id}', 'App\Http\Controllers\Admin\AdminController@edit')->name('admin.edit');
Route::post('/Admin/update/{id}', 'App\Http\Controllers\Admin\AdminController@update')->name('admin.update');
Route::get('/Admin/delete/{id}', 'App\Http\Controllers\Admin\AdminController@delete')->name('admin.delete');



//Route::get('/home', 'App\Http\Controllers\Admin\UserController@index')->name('user.index');


Route::get('/User/create', 'App\Http\Controllers\User\UserController@create');
Route::post('/user/User/store', 'App\Http\Controllers\User\UserController@store.user')->name('user.store');
Route::get('/User/list', 'App\Http\Controllers\User\UserController@index')->name('user.index');


Route::get('/User/show/{id}', 'App\Http\Controllers\User\UserController@show')->name('user.show');
Route::get('/User/edit/{id}', 'App\Http\Controllers\User\UserController@edit')->name('user.edit');
Route::post('/User/update/{id}', 'App\Http\Controllers\User\UserController@update')->name('user.update');
Route::get('/User/delete/{id}', 'App\Http\Controllers\User\UserController@delete')->name('user.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
