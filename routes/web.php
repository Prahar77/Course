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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin/Admin/create', 'App\Http\Controllers\Admin\AdminController@create');
Route::post('/admin/Admin/store', 'App\Http\Controllers\Admin\AdminController@store')->name('admin.store');
Route::get('admin/Admin/list', 'App\Http\Controllers\Admin\AdminController@index')->name('admin.index');


Route::get('/admin/Admin/show/{id}', 'App\Http\Controllers\Admin\AdminController@show')->name('show');
Route::get('/admin/Admin/edit/{id}', 'App\Http\Controllers\Admin\AdminController@edit')->name('edit');
Route::post('/admin/Admin/update/{id}', 'App\Http\Controllers\Admin\AdminController@update')->name('update');
Route::get('/admin/Admin/delete/{id}', 'App\Http\Controllers\Admin\AdminController@delete')->name('delete');



Route::get('/', 'App\Http\Controllers\Admin\AdminController@index2')->name('admin.index2');


Route::get('/user/User/create', 'App\Http\Controllers\User\UserController@create');
Route::post('/user/User/store', 'App\Http\Controllers\User\UserController@create');
