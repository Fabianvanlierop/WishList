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


Route::get('/admin', ['uses' => 'AdminController@index'])->name('admin');

Route::post('/admin/item/add', 'ItemsController@create')->name('add_item');

Route::get('/admin/item/delete/{id}', ['uses' => 'ItemsController@delete'])->name('delete_item');

Route::get('/wishlist/{id}', ['uses' => 'ItemsController@index'])->name('wishlist');

Route::get('/wishlist/{id}/add', 'WishlistController@add')->name('add_item_wishlist');

Route::post('/wishlist/new', 'WishlistController@create')->name('new_wishlist');

Route::get('/wishlist/delete/{id}', ['uses' => 'WishlistController@delete'])->name('delete_wishlist');
