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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', 'HomeController@redirect');

Route::get('/', 'HomeController@index');

Route::get('/search', 'HomeController@Search');
Route::post('/add_cart/{id}', 'HomeController@AddCart');
Route::get('/showcart', 'HomeController@ShowCart');

Route::get('/deleteCart/{id}', 'HomeController@DeleteCart');
Route::post('/order', 'HomeController@Order');
//==============================Products========================//
Route::get('/product', 'AdminController@index');
Route::post('/add_product', 'AdminController@store');
Route::get('/show_product', 'AdminController@ShowProduct');
Route::get('/delete_product/{id}', 'AdminController@DeleteProduct');
Route::get('/delete_product/{id}', 'AdminController@DeleteProduct');

