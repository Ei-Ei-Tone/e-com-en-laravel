<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('login');
});

Route::post('/login','App\Http\Controllers\UserController@login');  /* Hidden File */
Route::get('/','App\Http\Controllers\ProductController@index');
Route::get('/detail/{id}','App\Http\Controllers\ProductController@detail');
Route::get('/search','App\Http\Controllers\ProductController@search');

Route::post('/add_to_cart','App\Http\Controllers\ProductController@addToCart');