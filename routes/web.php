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
    return view('welcome');
});

Auth::routes();


Route::get('/admin', 'AdminController@index')->name('admin');

Route::post('/admin/item/add', 'ItemsController@create')->name('add_item');

Route::get('/admin/item/delete/{id}', ['uses' => 'ItemsController@delete'])->name('delete_item');

Route::get('/wishlist', 'ItemsController@index')->name('wishlist');
