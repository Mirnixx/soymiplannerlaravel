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

 //  Route::get('ruta', 'controlador@metodo');

Route::get('/', 'IndexController@index');

Route::get('faq', 'FaqController@index');

/////////////agregado x make:auth///////////////

Auth::routes();

///////////////////////////////////////////////

Route::get('profile', 'ProfileController@index')->name('profile');

Route::get('profile/products', 'ProfileController@products')->name('profile');
Route::get('profile/sales', 'ProfileController@sales')->name('profile');


Route::get('/products', 'ProductsController@index');
Route::get('/products/filter', 'ProductsController@filter');

Route::get('/products/create', 'ProductsController@create');
Route::get('/products/{id}', 'ProductsController@show');


Route::get('/create', 'ProductsController@create')->middleware('auth');
Route::post('/create', 'ProductsController@store')->middleware('auth');


// Route::get('products/create', 'ProductsController@create');
// Route::post('products/create', 'ProductsController@store');


// Route::get('products/{id}/update', 'ProductsController@edit');
// Route::put('products/{id}/update', 'ProductsController@update');

// Route::delete('products/{id}', 'ProductsController@destroy');

