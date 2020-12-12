<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\HomeController@getHome');

Route::group(['middleware' => 'auth'], function () {
    Route::get('productos', 'App\Http\Controllers\ProductoController@getIndex');

    Route::get('productos/show/{id}', 'App\Http\Controllers\ProductoController@getShow');

    Route::get('productos/create', 'App\Http\Controllers\ProductoController@getCreate');

    Route::post('productos/create', 'App\Http\Controllers\ProductoController@postCreate');

    Route::get('productos/edit/{id}', 'App\Http\Controllers\ProductoController@getEdit');

    Route::put('productos/edit/{id}', 'App\Http\Controllers\ProductoController@putEdit');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
