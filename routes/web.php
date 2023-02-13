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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

// Rutas para usuarios validados y clientes
Route::middleware(['auth', 'client'])->group(function () {
    Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("products.index");
    Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("products.show");
});

// Rutas para usuarios validados y administradores
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/home', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.products.index");
    Route::post('admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.products.store");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.products.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.products.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.products.update");
});

// Ruta para la página de configuración
Route::middleware(['auth'])->group(function () {
    Route::get('/conf/index', 'App\Http\Controllers\ConfController@index')->name('conf.index');
    Route::post('/conf/update', 'App\Http\Controllers\ConfController@update')->name('conf.update');
});

// Rutas de autenticación
Auth::routes();