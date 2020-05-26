<?php

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
    return view('layout.master');
});

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');

Route::get('categories/{id}/products', 'CategoryController@getListProductsbyCateID')->name('list-product-by-cate');